package es.com.escribanodiaz.listadelacompra;

/**
 * Created by alumno_solvam on 8/11/16.
 */

public class Articulo {
    private String comida;
    private boolean comprado;

    public Articulo (String comida, Boolean comprado){
        this.comida=comida;
        this.comprado=comprado;
    }

    public String getComida() {
        return comida;
    }

    public void setComida(String comida) {
        this.comida = comida;
    }

    public boolean isComprado()	{
        return comprado;
    }
    public void setComprado(boolean comprado)	{
        this.comprado	=	comprado;
    }
}
