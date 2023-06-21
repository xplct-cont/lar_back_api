<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index(){

        $stud = Student::all();
        if ($stud->count() > 0){

        return response()->json([
            'status' => 200,
            'students' => $stud
        ], 200);

    }else{
        return response()->json([
        'status' => 404,
        'message' => 'No records found!'
        ], 404);
      }
    }

        public function store(Request $request){
          $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'course' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:11'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
            }else{
                $stud = Student::create([
                    'name' => $request->name,
                    'course' => $request->course,
                    'email' => $request->email,
                    'phone' => $request->phone,

                ]);

                if($stud){

                        return response()->json([
                            'status' => 200,
                            'message' => 'Student Created Successfully!'
                        ], 200);

                }else{
                        return response()->json([
                            'status' => 500,
                            'message' => "Something went wrong!"
                        ], 500);
                }
          }
        }

        public function show ($id){
             $stud = Student::find($id);
             if($stud){

                return response()->json([
                    'status' => 200,
                    'student' => $stud
                ], 200);

             }else{

                return response()->json([
                    'status' => 404,
                    'message' => "No Student found!"
                ], 500);
             }
        }

        public function edit ($id){
            $stud = Student::find($id);
            if($stud){

               return response()->json([
                   'status' => 200,
                   'student' => $stud
               ], 200);

            }else{

               return response()->json([
                   'status' => 404,
                   'message' => "No Student found!"
               ], 500);
            }
       }

        public function update(Request $request, int $id){

            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'course' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|digits:11'
            ]);

            if($validator->fails()){
                return response()->json([
                    'status' => 422,
                    'error' => $validator->messages()
                ], 422);
                }else{

                    $stud = Student::find($id);

                    if($stud){
                    $stud->update([
                        'name' => $request->name,
                        'course' => $request->course,
                        'email' => $request->email,
                        'phone' => $request->phone,

                    ]);

                            return response()->json([
                                'status' => 200,
                                'message' => 'Student Updated Successfully!'
                            ], 200);

                    }else{
                            return response()->json([
                                'status' => 404,
                                'message' => "No Student found!"
                            ], 404);
                    }
              }
        }

        public function delete($id){
            $stud = Student::find($id);
              if($stud){

                 $stud->delete();
                 return response()->json([
                    'status' => 200,
                    'message' => 'Student Deleted Successfully!'
                ], 200);

                 }else{
                            return response()->json([
                                'status' => 404,
                                'message' => "No Student found!"
                            ], 404);
            }
        }
    }

