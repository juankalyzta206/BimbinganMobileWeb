package com.Bimbingan.Dosen;

import android.app.DatePickerDialog;
import android.app.ProgressDialog;
import android.content.Intent;
import android.graphics.Bitmap;
import android.net.Uri;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import java.util.Calendar;
import java.util.HashMap;

public class Konsultasi extends AppCompatActivity implements View.OnClickListener {

    //Dibawah ini merupakan perintah untuk mendefinikan View
    private EditText editTextId;
    private EditText editTextNIP;
    private EditText editTextHasil;

    Button buttonChoose;
    private Button buttonUpdate;
    Bitmap bitmap, decoded;
    int success;
    int PICK_IMAGE_REQUEST = 1;
    int bitmap_size = 60; // range 1 - 100
    private Uri filePath;
    private ImageView imageView;
    private Button Add;
    private Button Home;
    Calendar myCalendar;
    DatePickerDialog.OnDateSetListener date;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_konsultasi);

        //Inisialisasi dari View
        editTextId = (EditText) findViewById(R.id.editTextNIM);
        editTextHasil = (EditText) findViewById(R.id.editTextHasil);
        editTextNIP = (EditText) findViewById(R.id.editTextNIP);

//        buttonChoose = (Button) findViewById(R.id.buttonChoose);
        Add = (Button) findViewById(R.id.Add);
        Home = (Button) findViewById(R.id.home);

        //Setting listeners to button
        Add.setOnClickListener(this);
        Home.setOnClickListener(this);

//        myCalendar = Calendar.getInstance();
//        date = new DatePickerDialog.OnDateSetListener() {
//            @Override
//            public void onDateSet(DatePicker view, int year, int monthOfYear,
//                                  int dayOfMonth) {
//                // TODO Auto-generated method stub
//                myCalendar.set(Calendar.YEAR, year);
//                myCalendar.set(Calendar.MONTH, monthOfYear);
//                myCalendar.set(Calendar.DAY_OF_MONTH, dayOfMonth);
//                updateLabel();
//            }
//        };
//
//        editTextTanggal.setOnClickListener(new View.OnClickListener() {
//
//            @Override
//            public void onClick(View v) {
//                // TODO Auto-generated method stub
//                new DatePickerDialog(Berita.this, date, myCalendar
//                        .get(Calendar.YEAR), myCalendar.get(Calendar.MONTH),
//                        myCalendar.get(Calendar.DAY_OF_MONTH)).show();
//            }
//        });
//
//        editTextJam.setOnClickListener(new View.OnClickListener() {
//
//            @Override
//            public void onClick(View v) {
//                // TODO Auto-generated method stub
//                Calendar mcurrentTime = Calendar.getInstance();
//                int hour = mcurrentTime.get(Calendar.HOUR_OF_DAY);
//                int minute = mcurrentTime.get(Calendar.MINUTE);
//                TimePickerDialog mTimePicker;
//                mTimePicker = new TimePickerDialog(Berita.this, new TimePickerDialog.OnTimeSetListener() {
//
//                    @Override
//                    public void onTimeSet(TimePicker timePicker, int selectedHour, int selectedMinute) {
//                        editTextJam.setText(selectedHour + ":" + selectedMinute);
//                    }
//                }, hour, minute, true);//Yes 24 hour time
//                mTimePicker.setTitle("Select Time");
//                mTimePicker.show();
//
//            }
//        });


//        buttonChoose.setOnClickListener(this);
    }

//    private void updateLabel() {
//        String myFormat = "yyyy-MM-dd";
//        SimpleDateFormat sdf = new SimpleDateFormat(myFormat, Locale.US);
//        editTextTanggal.setText(sdf.format(myCalendar.getTime()));
//    }

//    private void showFileChooser() {
//        Intent intent = new Intent();
//        intent.setType("image/*");
//        intent.setAction(Intent.ACTION_GET_CONTENT);
//        startActivityForResult(Intent.createChooser(intent, "Select Picture"), PICK_IMAGE_REQUEST);
//    }
//
//    @Override
//    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
//        super.onActivityResult(requestCode, resultCode, data);
//
//        if (requestCode == PICK_IMAGE_REQUEST && resultCode == RESULT_OK && data != null && data.getData() != null) {
//
//            filePath = data.getData();
//            try {
//                bitmap = MediaStore.Images.Media.getBitmap(getContentResolver(), filePath);
//                imageView.setImageBitmap(bitmap);
//            } catch (IOException e) {
//                e.printStackTrace();
//            }
//        }
//    }
//
//    public String getStringImage(Bitmap bmp){
//        ByteArrayOutputStream baos = new ByteArrayOutputStream();
//        bmp.compress(Bitmap.CompressFormat.JPEG, 100, baos);
//        byte[] imageBytes = baos.toByteArray();
//        String encodedImage = Base64.encodeToString(imageBytes, Base64.DEFAULT);
//        return encodedImage;
//    }

    //Dibawah ini merupakan perintah untuk Menambahkan Pegawai (CREATE)
    private void addEmployee(){

        final String nim = editTextId.getText().toString().trim();
        final String hasil = editTextHasil.getText().toString().trim();
        final String nip = editTextNIP.getText().toString().trim();
//        final String jam_berita = editTextJam.getText().toString().trim();
//        final String gambar = getStringImage(decoded);
        class AddEmployee extends AsyncTask<Void,Void,String> {

            ProgressDialog loading;

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(Konsultasi.this,"Menambahkan...","Tunggu...",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(Konsultasi.this,s,Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(Void... v) {
                HashMap<String,String> params = new HashMap<>();
                params.put(Server.KEY_EMP_Nim,nim);
                params.put(Server.KEY_EMP_Hasil,hasil);
                params.put(Server.KEY_EMP_Nip,nip);
//                params.put(Server.KEY_EMP_JAM,jam_berita);
//                params.put(Server.KEY_EMP_GAMBAR,gambar);

                RequestHandler rh = new RequestHandler();
                String res = rh.sendPostRequest(Server.URL_GET_BIMBINGAN, params);
                return res;
            }

        }

        AddEmployee ae = new AddEmployee();
        ae.execute();
    }

    @Override
    public void onClick(View v) {
        if(v == Add){
            addEmployee();
        }

//        if (v == buttonChoose) {
//            showFileChooser();
//        }

        if(v == Home){
            startActivity(new Intent(this,MainActivity.class));
        }
    }
}
