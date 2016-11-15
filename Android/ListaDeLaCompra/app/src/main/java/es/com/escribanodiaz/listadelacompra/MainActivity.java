package es.com.escribanodiaz.listadelacompra;

import android.content.Context;
import android.content.DialogInterface;
import android.graphics.Color;
import android.graphics.Paint;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.ContextMenu;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.view.inputmethod.InputMethod;
import android.view.inputmethod.InputMethodManager;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {
    static ListView carro;
    static ArrayList <Articulo> articulo;
    static EditText editText;
    static EditText editTexte;
    static ViewHolder holder;
    TextView comprado;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        carro = (ListView) findViewById(R.id.carro);
        articulo = new ArrayList<Articulo>();
        holder = new ViewHolder(this,articulo);
        carro.setAdapter(holder);

        holder.notifyDataSetChanged();

        carro.setOnItemClickListener(new AdapterView.OnItemClickListener() {

            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                comprado = (TextView) view.findViewById(R.id.textView3);
                if (articulo.get(position).isComprado()==false) {
                    comprado.setPaintFlags(comprado.getPaintFlags()
                            |  Paint.STRIKE_THRU_TEXT_FLAG);
                    comprado.setTextColor(Color.parseColor("#00FF00"));
                    articulo.get(position).setComprado(true);
                    Toast toast1 = Toast.makeText(getApplicationContext(), "Has Comprado "+articulo.get(position).getComida(), Toast.LENGTH_SHORT);
                    toast1.show();
                }
                else {
                    comprado.setPaintFlags(comprado.getPaintFlags()
                            & ~Paint.STRIKE_THRU_TEXT_FLAG);
                    comprado.setTextColor(Color.parseColor("#FF0000"));
                    Toast toast2 = Toast.makeText(getApplicationContext(), "Necessitas Comprar "+articulo.get(position).getComida(), Toast.LENGTH_SHORT);
                    toast2.show();
                    articulo.get(position).setComprado(false);
                }
            }
        });
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
                                String nuevoarticulo = editText.getText().toString();
                                nuevoarticulo = nuevoarticulo.trim();
                                if(nuevoarticulo.length()<=0){
                                    Toast toast3 = Toast.makeText(getApplicationContext(), "No has escrito nada", Toast.LENGTH_SHORT);
                                    toast3.show();
                                }
                                else {
                                    articulo.add(new Articulo(nuevoarticulo,false));
                                    holder.notifyDataSetChanged();
                                }
                                InputMethodManager imm = (InputMethodManager) getSystemService(Context.INPUT_METHOD_SERVICE);
                                imm.toggleSoftInput(InputMethodManager.HIDE_IMPLICIT_ONLY,0);
                            }
                        });

                builder2.create().show();
                InputMethodManager focus = (InputMethodManager) getSystemService(Context.INPUT_METHOD_SERVICE);
                focus.toggleSoftInput(InputMethodManager.SHOW_FORCED,0);
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
            menu.setHeaderTitle(articulo.get(info.position).getComida());
            inflater.inflate(R.menu.modificarlist,  menu);
        }
    }

    @Override
    public boolean onContextItemSelected(final MenuItem item) {
        final AdapterView.AdapterContextMenuInfo info =
                (AdapterView.AdapterContextMenuInfo) item.getMenuInfo();
        switch (item.getItemId()){

            case R.id.editar:
                final AlertDialog.Builder builder = new AlertDialog.Builder(MainActivity.this);
                LayoutInflater inflater = getLayoutInflater();
                View view = inflater.inflate(R.layout.editarticulo,null);

                editTexte = (EditText) view.findViewById(R.id.editTexte);
                editTexte.setText(articulo.get(info.position).getComida());
                editTexte.setSelection(editTexte.getText().length());

                builder.setView(view)
                        .setPositiveButton("Aceptar", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                String editararticulo = editTexte.getText().toString();
                                editararticulo = editararticulo.trim();
                                if(editararticulo.length()<=0){
                                    Toast toast3 = Toast.makeText(getApplicationContext(), "No has escrito nada", Toast.LENGTH_SHORT);
                                    toast3.show();
                                }else {
                                    articulo.get(info.position).setComida(editararticulo);
                                    holder.notifyDataSetChanged();
                                }
                                InputMethodManager imm = (InputMethodManager) getSystemService(Context.INPUT_METHOD_SERVICE);
                                imm.toggleSoftInput(InputMethodManager.HIDE_IMPLICIT_ONLY,0);
                            }
                        });

                InputMethodManager focus = (InputMethodManager) getSystemService(Context.INPUT_METHOD_SERVICE);
                focus.toggleSoftInput(InputMethodManager.SHOW_FORCED,0);
                builder.create().show();
                break;
            case R.id.borrar:
                AlertDialog.Builder builder1 =
                        new AlertDialog.Builder(MainActivity.this);

                builder1.setMessage("Deseas borra el articulo " +articulo.get(info.position).getComida()+".")
                        .setTitle("Borrar Articulo")
                        .setPositiveButton("Si", new DialogInterface.OnClickListener() {
                            public void onClick(DialogInterface dialog, int id) {
                                articulo.remove(info.position);
                                holder.notifyDataSetChanged();
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
