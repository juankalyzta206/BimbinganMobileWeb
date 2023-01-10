package com.Bimbingan.Dosen;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;

import androidx.appcompat.app.AppCompatActivity;
import androidx.cardview.widget.CardView;

public class MainActivity extends AppCompatActivity {


    CardView cardBimbingan, cardBerita;
    String id,username;
    SharedPreferences sharedpreferences;
    public static final String TAG_ID = "id";
    public static final String TAG_USERNAME = "username";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        sharedpreferences = getSharedPreferences(Login.my_shared_preferences, Context.MODE_PRIVATE);


        cardBimbingan = (CardView) findViewById(R.id.card_bimbingan);
        cardBerita = (CardView) findViewById(R.id.card_berita);


        id = getIntent().getStringExtra(TAG_ID);
        username = getIntent().getStringExtra(TAG_USERNAME);


    }
    public void Bimbingan(View view) {
        Intent intent = new Intent(MainActivity.this, Konsultasi.class);
        startActivity(intent);
    }

    public void Berita(View view) {
        Intent intent = new Intent(MainActivity.this, Berita.class);
        startActivity(intent);
    }


    public void logout(View view) {
        SharedPreferences.Editor editor = sharedpreferences.edit();
        editor.putBoolean(Login.session_status, false);
        editor.putString(TAG_ID, null);
        editor.putString(TAG_USERNAME, null);
        editor.commit();

        Intent intent = new Intent(MainActivity.this, Login.class);
        finish();
        startActivity(intent);

    }

//    public void daftarberita(View view) {
//        Intent intent = new Intent(MainActivity.this, TampilSemuaBerita.class);
//        startActivity(intent);
//    }

    public void Profile(View view) {
        Intent intent = new Intent(MainActivity.this, AllProfile.class);
        startActivity(intent);
    }
}
