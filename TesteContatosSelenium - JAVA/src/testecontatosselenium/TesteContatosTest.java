package testecontatosselenium;

import java.io.FileNotFoundException;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.Dimension;
import org.openqa.selenium.JavascriptExecutor;
import java.util.*;
import java.util.logging.Level;
import java.util.logging.Logger;
import org.junit.Test;
import org.junit.Before;
import org.junit.After;

public class TesteContatosTest {

    private WebDriver driver;
    private PersistenciaContatos p = new PersistenciaContatos();
    public List<ModelContatos> lista;

    public TesteContatosTest() {
        try {
            lista = p.PesquisarTodos();
        } catch (FileNotFoundException ex) {
            Logger.getLogger(TesteContatosTest.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    private Map<String, Object> vars;
    JavascriptExecutor js;

    @Before
    public void setUp() {
        driver = new ChromeDriver();
        js = (JavascriptExecutor) driver;
        vars = new HashMap<String, Object>();
    }

    @After
    public void tearDown() {
        driver.quit();
    }

    @Test
    public void testeContatos() throws InterruptedException {
        // Test name: TesteContatos
        // Step # | name | target | value
        // 1 | open | / | 
        driver.get("http://127.0.0.1:8000/");
        // 2 | setWindowSize | 866x621 | 
        driver.manage().window().maximize();//   .setSize(new Dimension(1366, 768));//Dimensão da tela//866,621
        // 3 | click | css=.btn:nth-child(3) | 
        driver.findElement(By.cssSelector(".btn:nth-child(3)")).click();

        for (int i = 0; i < lista.size(); i++) {
            ModelContatos m = lista.get(i);
            Thread.sleep(1000);
            // 4 | click | id=txtNome  
            driver.findElement(By.id("txtNome")).click();
            Thread.sleep(1000);
            // 5 | type | id=txtNome 
            driver.findElement(By.id("txtNome")).sendKeys(m.getTxtNome());
            Thread.sleep(1000);
            // 6 | type | id=txtCelular 
            driver.findElement(By.id("txtCelular")).sendKeys(m.getTxtCelular());
            Thread.sleep(1000);
            // 7 | type | id=txtTelefone 
            driver.findElement(By.id("txtTelefone")).sendKeys(m.getTxtTelefone());
            Thread.sleep(1000);
            // 8 | type | id=txtData 
            driver.findElement(By.id("txtData")).sendKeys(m.getTxtData());
            Thread.sleep(1000);
            // 9 | click | css=input:nth-child(9) | 
            driver.findElement(By.cssSelector("input:nth-child(9)")).click();
            Thread.sleep(1000);
            // 10 | click | linkText=Voltar a tela anterior | 
            driver.findElement(By.linkText("Voltar a tela anterior")).click();
        }
        Thread.sleep(1000);
        // 11 | click | linkText=Voltar ao Menu | 
        driver.findElement(By.linkText("Voltar ao Menu")).click();
        Thread.sleep(1000);
        // 12 | click | css=.btn:nth-child(7) | 
        driver.findElement(By.cssSelector(".btn:nth-child(7)")).click();
        Thread.sleep(3000);
        // 13 | click | linkText=Voltar ao Menu | 
        driver.findElement(By.linkText("Voltar ao Menu")).click();
        Thread.sleep(1000);
        // 14 | close |  | 
        driver.close();
    }
}
