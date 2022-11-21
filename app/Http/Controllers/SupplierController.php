<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $supplierModel;


    public function __construct()
    {
        $this->supplierModel = new SupplierModel();
        // $this->middleware('auth:web', []);
    }

    public function index()
    {
        //
        $data = $this->supplierModel->get();
        return view('supplier.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.formtambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $data = [
                'nama_supplier'   => $request->input('nama_supplier'),
                'email'           => $request->input('email'),
                'password'        => $request->input('password'),
                'alamat_supplier' => $request->input('alamat_supplier'),
                'telp_supplier'   => $request->input('telp_supplier')
            ];
            //substr(hexdec(random_int(0,9999908)),4,-4);

            // $id_lokasi = substr(md5(rand(0, 99999)), -4);
            // $data['id_lokasi'] = $id_lokasi;
            // echo json_encode($data);
            //insert data ke database
            $insert = $this->supplierModel->create($data);
            //Promise 
            if ($insert) {
                //redirect('gudang','refresh');
                return redirect('supplier');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
            //return "yaaah error nih, sorry ya";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = $this->supplierModel->find($id);
        return view('supplier.formedit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        try {
            $data = [
                'nama_supplier'   => $request->input('nama_supplier'),
                'email'           => $request->input('email'),
                'password'        => $request->input('password'),
                'alamat_supplier' => $request->input('alamat_supplier'),
                'telp_supplier'   => $request->input('telp_supplier')
            ];
            $upd = $this->supplierModel
                ->where('id', $request->input('id'))
                ->update($data);
            if ($upd) {
                return redirect('supplier');
            } else {
                return redirect('supplier');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $hapus = $this->supplierModel
                ->where('id', $id)
                ->delete();
            if ($hapus) {
                return redirect('supplier');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
