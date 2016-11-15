package es.com.escribanodiaz.listadelacompra;

import android.app.Activity;
import android.graphics.Color;
import android.graphics.Paint;
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
    private ArrayList<Articulo> articulos = new ArrayList();

    public ViewHolder (Activity myContext, ArrayList<Articulo> articulos){
        this.myContext = myContext;
        this.articulos = articulos;
    }

    @Override
    public int getCount() {
        return articulos.size();
    }

    @Override
    public Object getItem(int position) {
        return articulos.get(position);
    }

    @Override
    public long getItemId(int position) {
        return 0;
    }

    public class ViewHolderItem {
        private TextView nombrecomida;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View item = convertView;
        ViewHolderItem vistaTag;

        if (item == null) {
            LayoutInflater inflater = myContext.getLayoutInflater();
            item = inflater.inflate(R.layout.customcarro, null);

            vistaTag = new ViewHolderItem();
            vistaTag.nombrecomida = (TextView) item.findViewById(R.id.textView3);

            item.setTag(vistaTag);
        } else {
            vistaTag = (ViewHolderItem) item.getTag();
        }

        Articulo arti = articulos.get(position);
        vistaTag.nombrecomida.setText(arti.getComida());

        if (articulos.get(position).isComprado()) {
            vistaTag.nombrecomida.setPaintFlags(vistaTag.nombrecomida.getPaintFlags()
                    |  Paint.STRIKE_THRU_TEXT_FLAG);
            vistaTag.nombrecomida.setTextColor(Color.parseColor("#00FF00"));
        }
        else {
            vistaTag.nombrecomida.setPaintFlags(vistaTag.nombrecomida.getPaintFlags()
                    & ~Paint.STRIKE_THRU_TEXT_FLAG);
            vistaTag.nombrecomida.setTextColor(Color.parseColor("#FF0000"));
        }

        return item;
    }

}
