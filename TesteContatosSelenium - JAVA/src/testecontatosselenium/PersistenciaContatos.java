package testecontatosselenium;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import com.google.gson.Gson;
import com.google.gson.GsonBuilder;
import com.google.gson.reflect.TypeToken;
import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Cleverton
 */
public class PersistenciaContatos {
    
    public List<ModelContatos> PesquisarTodos() throws FileNotFoundException {

        List<ModelContatos> lista = new ArrayList<ModelContatos>();

        GsonBuilder builder = new GsonBuilder();
        Gson gson = builder.create();

        System.out.println(gson.toJson(lista));
        builder = new GsonBuilder();
        gson = builder.create();
        BufferedReader bufferedReader = new BufferedReader(new FileReader("C:\\xampp\\htdocs\\dwAgendaContatos\\TesteContatosSelenium - JAVA\\src\\testecontatosselenium\\Clientes.json"));

        Type listType = new TypeToken<ArrayList<ModelContatos>>() {
        }.getType();

        lista = new ArrayList<ModelContatos>();

        lista = new Gson().fromJson(bufferedReader, listType);

        return lista;

    }
    
}
