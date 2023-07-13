<?php

namespace App\Http\Controllers\Coaching;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BatchController extends Controller
{
    public function create(Request $form)
    {
        $data['title'] = "Create New Batch";
        if (Request()->isMethod('POST')) {
            $form->validate([
                'batch_name' => 'required',
                'starting_date' => 'required'
            ], [], [
                'batch_name' => 'Batch Name',
                'starting_date' => 'Staring Form'
            ]);

            $batch = new Batch;
            $batch->batch_id = Helper::batch_id();
            $batch->coaching_id = Auth::guard('coaching')->id();
            $batch->batch_name = $form['batch_name'];
            $batch->batch_slug = Helper::slug($form['batch_name']);
            $batch->starting_date = $form['starting_date'];

            if ($batch->save()) {
                return redirect('coaching/batch/all')->with('message', 'Hoorey! Batch created successfully.');
            } else {
                return redirect()->back()->with('message', 'Oops! Something went wrong! Please try again.');
            }
        }
        return view('coaching.batch.create_update', $data);
    }

    public function list($type = null)
    {
        try {
            if (!$type) {
                $data['title'] = 'All Batch';
                $data['list'] = Batch::orderBy('batch_name', 'ASC')->paginate(20);
            } else {
                $data['title'] = 'Batch Trash Can';
                $data['list'] = Batch::onlyTrashed()->orderBy('batch_name', 'ASC')->paginate(20);
            }
            return view('coaching.batch.list', $data);
        } catch (\Throwable $th) {
            $data['status'] = "500";
            return view('error', $data);
        }
    }

    public function status($id, $status)
    {
        try {
            $batch = Batch::where(['id' => $id, 'coaching_id' => Auth::guard('coaching')->id()])->withTrashed()->first();

            if (empty($batch)) {
                return response()->json(['status' => false, 'message' => 'Sorry! Batch not found.']);
            }

            if ($status == 'active') {
                $batch->update(['status' => 'active']);
            } elseif ($status == 'suspend') {
                $batch->update(['status' => 'suspend']);
            } elseif ($status == 'trash') {
                $batch->delete();
                return response()->json(['status' => true, 'message' => 'Batch has been moved to Trash successfully.']);
            } elseif ($status == 'delete') {
                $batch->forceDelete();
                return response()->json(['status' => true, 'message' => 'Batch has been Deleted successfully.']);
            } elseif ($status == 'restore') {
                $batch->restore();
                return response()->json(['status' => true, 'message' => 'Batch has been Restore successfully.']);
            } else {
                return response()->json(['status' => false, 'message' => 'Sorry! Something went wrong.']);
            }

            return response()->json(['status' => true, 'message' => 'Status has been changed successfully.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'Oops! Internal server error.']);
        }
    }
}
