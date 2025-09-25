<?php

namespace App\Http\Controllers\API;

use App\Events\WelcomeEmail;
use App\Models\Country;
use App\Models\CrudOperations;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiCrudOperations extends Controller
{
    public function index(Request $request): JsonResponse
    {
        try {
            $requestData = $request->all();
            $search = empty($requestData['search']) ? $requestData['search'] : null;
            $users = CrudOperations::where('first_name', 'LIKE', "%$search%")->with('getCountry')->paginate(10);
            return response()->json(['status' => 200, 'message' => 'Data retrieved successfully.', 'data' => $users]);
        } catch (\Exception $ex) {
            return response()->json(['status' => 500, 'message' => $ex->getMessage(), 'data' => null]);
        }
    }

    public function create(): JsonResponse
    {
        try {
            $countries = Country::all();
            return response()->json(['status' => 200, 'message' => 'Data retrieved successfully.', 'data' => $countries]);
        } catch (\Exception $ex) {
            return response()->json(['status' => 500, 'message' => $ex->getMessage(), 'data' => null]);
        }
    }

    public function store(Request $request) : JsonResponse
    {
        try {
            $requestData = $request->all();
            if (!empty($requestData['profile'])) {
                $imgName = 'lv_' . rand() . '.' . $request->profile->extension();
                $request->profile->move(public_path('profiles/'), $imgName);
                $requestData['profile'] = $imgName;
            }
            $user = CrudOperations::create($requestData);
            event(new WelcomeEmail($user));
            return response()->json(['status' => 200, 'message' => 'User data stored successfully.', 'data' => $user]);
        } catch (\Exception $ex) {
            return response()->json(['status' => 500, 'message' => $ex->getMessage(), 'data' => null]);
        }
    }

    public function edit(CrudOperations $apiCrud) : JsonResponse
    {
        try {
            $countries = Country::all();
            return response()->json(['status' => 200, 'message' => 'User data successfully.', 'data' => ['user_data' => $apiCrud, 'countries' => $countries]]);
        } catch (\Exception $ex) {
            return response()->json(['status' => 500, 'message' => $ex->getMessage(), 'data' => null]);
        }
    }

    public function update(Request $request, CrudOperations $apiCrud) : JsonResponse
    {
        try {
            $apiCrud->first_name = $request->first_name ?? $apiCrud->first_name;
            $apiCrud->last_name = $request->last_name ?? $apiCrud->last_name;
            $apiCrud->email = $request->email ?? $apiCrud->email;
            $apiCrud->contact = $request->contact ?? $apiCrud->contact;
            $apiCrud->gender = $request->gender ?? $apiCrud->gender;
            $apiCrud->hobbies = $request->hobbies ?? $apiCrud->hobbies_arr;
            $apiCrud->address = $request->address ?? $apiCrud->address;
            $apiCrud->country = $request->country ?? $apiCrud->country;
            $apiCrud->save();
            return response()->json(['status' => 200, 'message' => 'User Updated Successfully.', 'data' => $apiCrud]);
        } catch (\Exception $ex) {
            return response()->json(['status' => 500, 'message' => $ex->getMessage(), 'data' => null]);
        }
    }

    public function destroy(CrudOperations $apiCrud) : JsonResponse
    {
        try {
            $apiCrud->delete();
            return response()->json(['status' => 200, 'message' => 'User Deleted Successfully.', 'data' => null]);
        } catch (\Exception $ex) {
            return response()->json(['status' => 500, 'message' => $ex->getMessage(), 'data' => null]);
        }
    }

    public function imageUpdate(Request $request) : JsonResponse
    {
        try {
            $requestData = $request->all();
            $user = CrudOperations::find($requestData['user_id']);
            //$requestData['profile'] = NULL;
            if (!empty($requestData['profile'])) {
                $imgName = 'lv_' . rand() . '.' . $request->profile->extension();
                $request->profile->move(public_path('profiles/'), $imgName);
                $user->profile = $imgName;
                $user->save();
            }
            //CrudOperations::where('id', $requestData['user_id'])->update(['profile' => $requestData['profile']])
            return response()->json(['status' => 200, 'message' => 'User image updated Successfully.', 'data' => $user]);
        } catch (\Exception $ex) {
            return response()->json(['status' => 500, 'message' => $ex->getMessage(), 'data' => null]);
        }
    }


}
