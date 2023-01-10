package com.Bimbingan.Dosen;

import androidx.appcompat.app.AppCompatActivity;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;

public class AllProfile extends AppCompatActivity implements ListView.OnItemClickListener{

    private ListView listView;

    private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_all_profile);
        listView = (ListView) findViewById(R.id.listView);
        listView.setOnItemClickListener(this);
        getJSON();
    }


    private void showEmployee(){
        JSONObject jsonObject = null;
        ArrayList<HashMap<String,String>> list = new ArrayList<HashMap<String, String>>();
        try {
            jsonObject = new JSONObject(JSON_STRING);
            JSONArray result = jsonObject.getJSONArray(Server.TAG_JSON_ARRAY4);

            for(int i = 0; i<result.length(); i++){
                JSONObject jo = result.getJSONObject(i);
                String nip = jo.getString(Server.TAG_Nip);
                String namados = jo.getString(Server.TAG_NamaDos);
                String email = jo.getString(Server.TAG_EmailDos);
                String tlp = jo.getString(Server.TAG_TelpDos);
                String almt = jo.getString(Server.TAG_AlamatDos);

                HashMap<String,String> employees = new HashMap<>();
                employees.put(Server.TAG_Nip,nip);
                employees.put(Server.TAG_NamaDos,namados);
                employees.put(Server.TAG_EmailDos,email);
                employees.put(Server.TAG_TelpDos,tlp);
                employees.put(Server.TAG_AlamatDos,almt);
                list.add(employees);
            }

        } catch (JSONException e) {
            e.printStackTrace();
        }

        ListAdapter adapter = new SimpleAdapter(
                AllProfile.this, list, R.layout.list_profile,
                new String[]{Server.TAG_Nip,Server.TAG_NamaDos},
                new int[]{R.id.id, R.id.name});

        listView.setAdapter(adapter);
    }

    private void getJSON(){
        class GetJSON extends AsyncTask<Void,Void,String> {

            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(AllProfile.this,"Mengambil Data","Mohon Tunggu...",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                JSON_STRING = s;
                showEmployee();
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequest(Server.URL_Profile);
                return s;
            }
        }
        GetJSON gj = new GetJSON();
        gj.execute();
    }

    @Override
    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
        Intent intent = new Intent(this, ProfileActivity.class);
        HashMap<String,String> map =(HashMap)parent.getItemAtPosition(position);
        String extNip = map.get(Server.TAG_Nip);
        String extNamDos = map.get(Server.TAG_NamaDos);
        String extEmail = map.get(Server.TAG_EmailDos);
        String extTlp = map.get(Server.TAG_TelpDos);
        String extAlmt = map.get(Server.TAG_AlamatDos);
        intent.putExtra(Server.Ext_Nip,extNip);
        intent.putExtra(Server.Ext_NamaDos,extNamDos);
        intent.putExtra(Server.Ext_Email,extEmail);
        intent.putExtra(Server.Ext_Tlp,extTlp);
        intent.putExtra(Server.Ext_Almt,extAlmt);
        startActivity(intent);
    }
}
