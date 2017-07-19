import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.*;
import org.openqa.selenium.remote.DesiredCapabilities;


public class IntegrationTest{
	WebDriver driver;
	public static void main(String[] args) {
			allCheck();
	}
	public void establishConnection(){
		System.setProperty("webdriver.chrome.driver", "chromedriver");

		try {Thread.sleep(2000);} catch (Exception e) {}  

		
        
        //wait untill the page loads
        try {Thread.sleep(2000);} catch (Exception e) {}  

		driver = new ChromeDriver();
		driver.get("localhost/ComBook");

	}
	public void checkSignIn(String username,String password){
		establishConnection();
		//wait untill the page loads
        try {Thread.sleep(2000);} catch (Exception e) {} 

        //find and fill in username and password fields
        WebElement username = driver.findElement(By.name("uname"));
        WebElement password = driver.findElement(By.name("pwd"));
        WebElement Login = driver.findElement(By.name("submit"));
        username.sendKeys(username);
        password.sendKeys(password);
        Login.click();
	}
	public void checkAssign(){
		checkSignIn("Biruk", "1234567890");
		driver.findElement(By.id("assign")).click();

		try {Thread.sleep(2000);} catch (Exception e) {}
		driver.findElement(By.name("emp")).sendKeys("abebe");
		driver.findElement(By.name("task")).sendKeys("DO THIS");

		driver.findElement(By.id("submittask")).click();
	}
	public void checksignOut(){
		driver.findElement(By.id("sout")).click();
	}
	public static void allCheck(){
			checkSignIn();
			checksignOut();
			checkAssign();
	}
}