package com.Bimbingan.Dosen;

import androidx.appcompat.app.AppCompatActivity;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class TampilBerita extends AppCompatActivity {

    private EditText editTextId;
    private EditText editTextJudul;
    private EditText editTextIsi;
    private EditText editTextTanggal;
    private EditText editTextJam;

    private Button Add;
    private Button Home;


    private String id,judul,isi,tanggal,jam;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tampil_berita);

        Intent intent = getIntent();

        id = intent.getStringExtra(Server.Ext_IDBR);
        judul = intent.getStringExtra(Server.Ext_Judul);
        isi = intent.getStringExtra(Server.Ext_isi);
        tanggal = intent.getStringExtra(Server.Ext_tgl);
        jam = intent.getStringExtra(Server.Ext_jam);
        editTextId = (EditText) findViewById(R.id.editTextId);
        editTextJudul = (EditText) findViewById(R.id.editTextJudul);
        editTextIsi = (EditText) findViewById(R.id.editTextIsi);
        editTextTanggal = (EditText) findViewById(R.id.editTextTanggal);
        editTextJam = (EditText) findViewById(R.id.editTextJam);

        Home = (Button) findViewById(R.id.home);

        editTextId.setText(id);
        editTextJudul.setText(judul);
        editTextTanggal.setText(tanggal);
        editTextIsi.setText(isi);
        editTextJam.setText(jam);

        getEmployee();
    }

    private void getEmployee(){
        class GetEmployee extends AsyncTask<Void,Void,String> {
            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(TampilBerita.this,"Fetching...","Wait...",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
//                showEmployee(s);
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequestParam(Server.URL_GET_DetBerita,id);
                return s;
            }
        }
        GetEmployee ge = new GetEmployee();
        ge.execute();
    }

    public void tampil(View view) {
        Intent intent = new Intent(TampilBerita.this, MainActivity.class);
        startActivity(intent);
    }


}
