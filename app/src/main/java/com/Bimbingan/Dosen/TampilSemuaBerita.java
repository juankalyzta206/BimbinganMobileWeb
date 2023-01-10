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


public class TampilSemuaBerita extends AppCompatActivity implements ListView.OnItemClickListener{

    private ListView listView;

    private String JSON_STRING;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tampil_semua_berita);
        listView = (ListView) findViewById(R.id.listView);
        listView.setOnItemClickListener(this);
        getJSON();
    }


    private void showEmployee(){
        JSONObject jsonObject = null;
        ArrayList<HashMap<String,String>> list = new ArrayList<HashMap<String, String>>();
        try {
            jsonObject = new JSONObject(JSON_STRING);
            JSONArray result = jsonObject.getJSONArray(Server.TAG_JSON_ARRAY2);

            for(int i = 0; i<result.length(); i++){
                JSONObject jo = result.getJSONObject(i);
                String id = jo.getString(Server.TAG_IDBERITA);
                String judul = jo.getString(Server.TAG_JUDUL);
                String isi = jo.getString(Server.TAG_ISI);
                String tgl = jo.getString(Server.TAG_TGLBERITA);
                String jam = jo.getString(Server.TAG_JAMBerita);

                HashMap<String,String> employees = new HashMap<>();
                employees.put(Server.TAG_IDBERITA,id);
                employees.put(Server.TAG_JUDUL,judul);
                employees.put(Server.TAG_ISI,isi);
                employees.put(Server.TAG_TGLBERITA,tgl);
                employees.put(Server.TAG_JAMBerita,jam);
                list.add(employees);
            }

        } catch (JSONException e) {
            e.printStackTrace();
        }

        ListAdapter adapter = new SimpleAdapter(
                TampilSemuaBerita.this, list, R.layout.list_berita,
                new String[]{Server.TAG_IDBERITA,Server.TAG_JUDUL},
                new int[]{R.id.id, R.id.judul});

        listView.setAdapter(adapter);
    }

    private void getJSON(){
        class GetJSON extends AsyncTask<Void,Void,String>{

            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(TampilSemuaBerita.this,"Mengambil Data","Mohon Tunggu...",false,false);
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
                String s = rh.sendGetRequest(Server.URL_GET_ALLBerita);
                return s;
            }
        }
        GetJSON gj = new GetJSON();
        gj.execute();
    }

    @Override
    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
        Intent intent = new Intent(this, TampilBerita.class);
        HashMap<String,String> map =(HashMap)parent.getItemAtPosition(position);
        String extIDBR = map.get(Server.TAG_IDBERITA);
        String extJudul = map.get(Server.TAG_JUDUL);
        String extIsi = map.get(Server.TAG_ISI);
        String extTGL = map.get(Server.TAG_TGLBERITA);
        String extJam = map.get(Server.TAG_JAMBerita);
        intent.putExtra(Server.Ext_IDBR,extIDBR);
        intent.putExtra(Server.Ext_Judul,extJudul);
        intent.putExtra(Server.Ext_isi,extIsi);
        intent.putExtra(Server.Ext_tgl,extTGL);
        intent.putExtra(Server.Ext_jam,extJam);
        startActivity(intent);
    }
}