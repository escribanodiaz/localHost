package es.com.escribanodiaz.listadelacompra;

/**
 * Created by alumno_solvam on 8/11/16.
 */

public class Articulo {
    private String comida;

    public Articulo (String comida){
        this.comida=comida;
    }

    public String getComida() {
        return comida;
    }

    public void setComida(String comida) {
        this.comida = comida;
    }
}
