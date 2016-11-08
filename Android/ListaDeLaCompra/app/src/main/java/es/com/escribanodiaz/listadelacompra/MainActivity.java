package es.com.escribanodiaz.listadelacompra;

import android.content.DialogInterface;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.ContextMenu;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    static ListView carro;
    static ArrayList arraycarro;
    static ArrayAdapter<String> adapetercarro;
    static EditText editText;
    static EditText editTexte;
    static ViewHolder holder;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        carro = (ListView) findViewById(R.id.carro);
        holder = new ViewHolder(this);
        //arraycarro = new ArrayList<String>();

        //adapetercarro = new ArrayAdapter<String>(this, R.layout.customcarro, arraycarro);
        carro.setAdapter(new ViewHolder(this));

        registerForContextMenu(carro);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.compra, menu);
        return true;
    }

    public boolean onOptionsItemSelected (MenuItem item){
        switch(item.getItemId()){
            case R.id.añadir:
                AlertDialog.Builder builder2 = new AlertDialog.Builder(MainActivity.this);
                LayoutInflater inflater1 = getLayoutInflater();
                View view = inflater1.inflate(R.layout.articulo,null);

                editText = (EditText) view.findViewById(R.id.editText);

                builder2.setView(view)
                        .setPositiveButton("Aceptar", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                holder.add(editText.getText().toString());
                                adapetercarro.notifyDataSetChanged();
                            }
                        });

                builder2.create().show();
                break;
        }
        return super.onOptionsItemSelected(item);
    }

    @Override
    public void onCreateContextMenu(ContextMenu menu, View v, ContextMenu.ContextMenuInfo menuInfo) {
        super.onCreateContextMenu(menu, v, menuInfo);
        MenuInflater inflater = getMenuInflater();

        if(v.getId() == R.id.carro){
            AdapterView.AdapterContextMenuInfo info =
                    (AdapterView.AdapterContextMenuInfo) menuInfo;
            menu.setHeaderTitle(carro.getAdapter().getItem(info.position).toString());
            inflater.inflate(R.menu.modificarlist,  menu);
        }
    }

    @Override
    public boolean onContextItemSelected(final MenuItem item) {
        final AdapterView.AdapterContextMenuInfo info =
                (AdapterView.AdapterContextMenuInfo) item.getMenuInfo();
        switch (item.getItemId()){

            case R.id.editar:
                AlertDialog.Builder builder = new AlertDialog.Builder(MainActivity.this);
                LayoutInflater inflater = getLayoutInflater();
                View view = inflater.inflate(R.layout.editarticulo,null);

                editTexte = (EditText) view.findViewById(R.id.editTexte);
                editTexte.setText(carro.getAdapter().getItem(info.position).toString());

                builder.setView(view)
                        .setPositiveButton("Aceptar", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                arraycarro.set(info.position, editTexte.getText().toString());
                                adapetercarro.notifyDataSetChanged();
                            }
                        });

                builder.create().show();
                break;
            case R.id.borrar:
                AlertDialog.Builder builder1 =
                        new AlertDialog.Builder(MainActivity.this);

                builder1.setMessage("Deseas borra el planeta " +carro.getAdapter().getItem(info.position).toString()+".")
                        .setTitle("Borrar Planetas")
                        .setPositiveButton("Si", new DialogInterface.OnClickListener() {
                            public void onClick(DialogInterface dialog, int id) {
                                arraycarro.remove(info.position);
                                adapetercarro.notifyDataSetChanged();
                            }
                        })
                        .setNegativeButton("No", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                dialog.cancel();
                            }
                        });

                builder1.create().show();
                break;
        }
        return false;
    }
}
