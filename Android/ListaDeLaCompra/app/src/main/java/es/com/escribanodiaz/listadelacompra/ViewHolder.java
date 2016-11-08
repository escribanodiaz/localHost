package es.com.escribanodiaz.listadelacompra;

import android.app.Activity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.BaseAdapter;
import android.widget.TextView;

import java.util.ArrayList;

/**
 * Created by alumno_solvam on 8/11/16.
 */

public class ViewHolder extends BaseAdapter {

    private Activity myContext;
    private ArrayList<Articulo> articulos = new ArrayList<Articulo>();

    public ViewHolder (Activity myContext){
        super();
        this.myContext = myContext;
    }

    private static class ViewHoldera {
        private TextView nombrecomida;
    }

    @Override
    public int getCount() {
        return 0;
    }

    @Override
    public Object getItem(int position) {
        return null;
    }

    @Override
    public long getItemId(int position) {
        return 0;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View item = convertView;
        ViewHoldera vistaTag;

        if (item == null) {
            LayoutInflater inflater = myContext.getLayoutInflater();
            item = inflater.inflate(R.layout.customcarro,null);

            vistaTag = new ViewHoldera();
            vistaTag.nombrecomida = (TextView)item.findViewById(R.id.textView3);

            item.setTag(vistaTag);
        }
        else {
            vistaTag = (ViewHoldera) item.getTag();
        }
        vistaTag.nombrecomida.setText(articulos.get(position).getComida());


        return convertView;
    }
}
