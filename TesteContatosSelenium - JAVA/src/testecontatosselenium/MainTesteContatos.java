package testecontatosselenium;

import java.util.logging.Level;
import java.util.logging.Logger;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Cleverton
 */
public class MainTesteContatos {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {     
//        WebDriver driver = new ChromeDriver();
//        driver.get("http://globo.com/");        
        
        TesteContatosTest t = new TesteContatosTest();
        t.setUp();
        try {
            t.testeContatos();
        } catch (InterruptedException ex) {
            Logger.getLogger(MainTesteContatos.class.getName()).log(Level.SEVERE, null, ex);
        }
        t.tearDown();
        
    }
    
}
