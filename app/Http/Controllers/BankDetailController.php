<?php

namespace App\Http\Controllers;

use App\Models\Bank_detail;
use Illuminate\Http\Request;
use App\Http\Requests\Validators\BankDetailsValidator;
use Illuminate\Support\Facades\Log;
use App\Utilities\ApiResponser;

class BankDetailController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $Bank_detail = Bank_detail::where('isDeleted', false)->get();
        return $this->successResponse($Bank_detail, 200);
    }


    public function store(BankDetailsValidator $request)
    {
        $validator = $request->validated();

        $Bank_detail = Bank_detail::create([
            'account_holder' => $validator['account_holder'],
            'swift_code' => $validator['swift_code'],
            'account_number' => $validator['account_number'],
            'beneficiary_bank_name' => $validator['beneficiary_bank_name'],
            'iban_number' => $validator['iban_number'],
        ]);
    
        Log::info("Bank Detail Id= " . $Bank_detail->id . " created succesfully");

        return $this->successResponse($Bank_detail, 'Bank Detail created');
    }

    public function show($id)
    {
        $Bank_detail = Bank_detail::where('id', $id)->get();
        if ($Bank_detail==null) {

            Log::info("Bank Detail id=" . $id . " not found");
            return $this->errorResponse(' Id Not found');
        } elseif ($Bank_detail->isDeleted == true) {

            log::info("Bank Detail id=" . $Bank_detail->id . " is a deactivated ");
            return $this->successResponse(null, 'Diactivated Id');
        }

        return $this->successResponse($Bank_detail, 200);
    }


    public function update(BankDetailsValidator $request, $id)
    {
        $validator = $request->validated();
        $Bank_detail = Bank_detail::find($id);

        if ($Bank_detail == null) {
            log::info(" Bank Detail id=" . $id . " not found");
            return $this->errorResponse('Id Not found');
        } elseif ($Bank_detail->isDeleted == true) {
            log::info(" Bank Detail id=" . $Bank_detail->id . " is a deactivated");
            return $this->errorResponse('Diactivated Id');
        }

        $Bank_detail->update([
            'account_holder' => $validator['account_holder'],
            'swift_code' => $validator['swift_code'],
            'account_number' => $validator['account_number'],
            'beneficiary_bank_name' => $validator['beneficiary_bank_name'],
            'iban_number' => $validator['iban_number'],
         
        ]);
       
        $Bank_detail->save();
        log::info(" Bank Detail id=" . $Bank_detail->id . " successfully updated");

        return $this->successResponse($Bank_detail);
    }


    public function deactivate($id)
    {
        $Bank_detail = Bank_detail::find($id);

        if ($Bank_detail == null) {
            Log::info(" $Bank_detail id=" . $id . "not found");
            return $this->errorResponse('Id Not found');
        } elseif ($Bank_detail->isDeleted == true) {
            Log::info("  Bank Detail id=" . $Bank_detail->id . " is a deactivated ");
            return $this->successResponse(null, 'this Bank detail id is deleted already');
        }

        $Bank_detail->update([

            'isDeleted' => true,

        ]);
        Log::info("  Bank detail id=" . $Bank_detail->id . " deactivated successfully");
        return $this->successResponse(null, 'Deactivated successfully');
    }
}
