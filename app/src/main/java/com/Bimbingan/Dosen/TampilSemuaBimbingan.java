package com.Bimbingan.Dosen;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;

import androidx.appcompat.app.AppCompatActivity;


import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;

/**
 * Created by muhammadyusuf on 01/19/2017.
 * kodingindonesia
 */

public class TampilSemuaBimbingan extends AppCompatActivity {

    private ListView listView1;

    private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tampil_semua_bimbingan);
        listView1 = (ListView) findViewById(R.id.listView1);
//        listView1.setOnItemClickListener(this);
        getJSON();
    }


    private void showBimbingan(){
        JSONObject jsonObject = null;
        ArrayList<HashMap<String,String>> list1 = new ArrayList<HashMap<String, String>>();
        try {
            jsonObject = new JSONObject(JSON_STRING);
            JSONArray result = jsonObject.getJSONArray(Server.TAG_JSON_ARRAY);

            for(int i = 0; i<result.length(); i++){
                JSONObject jo = result.getJSONObject(i);
                String id = jo.getString(Server.TAG_IDBimbingan);
                String nim = jo.getString(Server.TAG_Nim);
                String hasil = jo.getString(Server.TAG_Hasil);


                HashMap<String,String> employees = new HashMap<>();
                employees.put(Server.TAG_IDBimbingan,id);
                employees.put(Server.TAG_Nim,nim);
                employees.put(Server.TAG_Hasil,hasil);
                list1.add(employees);
            }

        } catch (JSONException e) {
            e.printStackTrace();
        }

        ListAdapter adapter = new SimpleAdapter(
                TampilSemuaBimbingan.this, list1, R.layout.list_mahasiswa,
                new String[]{Server.TAG_IDBimbingan,Server.TAG_Nim},
                new int[]{R.id.idm, R.id.name});

        listView1.setAdapter(adapter);
    }

    private void getJSON(){
        class GetJSON extends AsyncTask<Void,Void,String>{

            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(TampilSemuaBimbingan.this,"Mengambil Data","Mohon Tunggu...",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                JSON_STRING = s;
                showBimbingan();
            }

            @Override
            protected String doInBackground(Void... params) {
                RequestHandler rh = new RequestHandler();
                String s = rh.sendGetRequest(Server.URL_GET_ALLBimbingan);
                return s;
            }
        }
        GetJSON gj = new GetJSON();
        gj.execute();
    }

//    @Override
//    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
//        Intent intent = new Intent(this, Bimbingan.class);
//        HashMap<String,String> map =(HashMap)parent.getItemAtPosition(position);
//        String extID = map.get(Server.TAG_IDBimbingan);
//        String extNim = map.get(Server.TAG_Nim);
//        String extHasil = map.get(Server.TAG_Hasil);
//        intent.putExtra(Server.Ext_ID,extID);
//        intent.putExtra(Server.Ext_Nim,extNim);
//        intent.putExtra(Server.Ext_Hasil,extHasil);
//        startActivity(intent);
//    }
}