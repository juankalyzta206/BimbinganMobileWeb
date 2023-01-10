package com.Bimbingan.Dosen;


import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class ProfileActivity extends AppCompatActivity {

    private EditText editTextId;
    private EditText editTextNama;
    private EditText editTextEmail;
    private EditText editTextTlp;
    private EditText editTextAlamat;

    private Button Home;

    private String nip, nama, email, alamat, tlp;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_profile);

        Intent intent = getIntent();

        nip = intent.getStringExtra(Server.Ext_Nip);
        nama = intent.getStringExtra(Server.Ext_NamaDos);
        email = intent.getStringExtra(Server.Ext_Email);
        alamat = intent.getStringExtra(Server.Ext_Almt);
        tlp = intent.getStringExtra(Server.Ext_Tlp);
        editTextId = (EditText) findViewById(R.id.editTextId);
        editTextNama = (EditText) findViewById(R.id.editTextNama);
        editTextEmail = (EditText) findViewById(R.id.editTextEmail);
        editTextTlp = (EditText) findViewById(R.id.editTextNoTlp);
        editTextAlamat = (EditText) findViewById(R.id.editTextAlamat);

        Home = (Button) findViewById(R.id.home);

        editTextId.setText(nip);
        editTextNama.setText(nama);
        editTextEmail.setText(email);
        editTextTlp.setText(tlp);
        editTextAlamat.setText(alamat);


        getEmployee();
    }

    private void getEmployee(){
        class GetEmployee extends AsyncTask<Void,Void,String> {
            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(ProfileActivity.this,"Fetching...","Wait...",false,false);
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
                String s = rh.sendGetRequestParam(Server.URL_GET_Detprofile, nip);
                return s;
            }
        }
        GetEmployee ge = new GetEmployee();
        ge.execute();
    }

    public void tampil(View view) {
        Intent intent = new Intent(ProfileActivity.this, MainActivity.class);
        startActivity(intent);
    }


}
