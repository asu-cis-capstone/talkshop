package testTalkShop;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.testng.Assert;
import org.testng.annotations.Test;

public class testTest {
  @Test
  public void TalkShopSmokeSuite() {
  }
 
  
  
 @Test
public static void userLoginTest() throws InterruptedException{
	
	//Point the location of the webdriver on the local machine
	System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
	//Instantiate the instance of the Chrome Driver
	WebDriver driver = new ChromeDriver();
	//Direct the driver to the location of the site
	driver.get("http://talk-shop.net");
	
	//Oopen the header and fill in the form
	driver.findElement(By.className("topBarText")).click();
	driver.manage().timeouts().implicitlyWait(100, TimeUnit.SECONDS);
	Thread.sleep(3000);
	driver.findElement(By.id("username")).sendKeys("jkhumpherys@gmail.com");
	Thread.sleep(3000);
	
	driver.findElement(By.id("password")).sendKeys("11111");
	driver.manage().timeouts().implicitlyWait(100, TimeUnit.SECONDS);
	Thread.sleep(5000);
	driver.findElement(By.id("submit")).click();
	Thread.sleep(3000);
	
	//Test if the welcomeBanner prompts the user with the correct message
	Assert.assertEquals(driver.findElement(By.id("welcomeBanner")).getText(), "WELCOME, JEREMY!");
	
	driver.close();
}
 
 @Test
 public static void loggingOut() throws InterruptedException{
	 	//Point the location of the webdriver on the local machine
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
		//Instantiate the instance of the Chrome Driver
		WebDriver driver = new ChromeDriver();
		//Direct the driver to the location of the site
		driver.get("http://talk-shop.net");
		
		//Oopen the header and fill in the form
		driver.findElement(By.className("topBarText")).click();
		driver.manage().timeouts().implicitlyWait(100, TimeUnit.SECONDS);
		Thread.sleep(3000);
		driver.findElement(By.id("username")).sendKeys("jkhumpherys@gmail.com");
		Thread.sleep(3000);
		
		driver.findElement(By.id("password")).sendKeys("11111");
		driver.manage().timeouts().implicitlyWait(100, TimeUnit.SECONDS);
		Thread.sleep(5000);
		driver.findElement(By.id("submit")).click();
		Thread.sleep(3000);
		
		//Test if the welcomeBanner prompts the user with the correct message
		Assert.assertEquals(driver.findElement(By.id("welcomeBanner")).getText(), "WELCOME, JEREMY!");
		
		//Logout Process
		driver.findElement(By.cssSelector("#login-trigger > div")).click();
		driver.manage().timeouts().implicitlyWait(200, TimeUnit.SECONDS);
		driver.findElement(By.id("logoutButton")).click();
		
		//Verify that the login box appears
		Assert.assertTrue(driver.findElement(By.id("login")).isDisplayed(), "login is not displaying");
		
		driver.close();
		
 }
 
 @Test
 public static void searchForSpeaker() throws InterruptedException{
	 		//Point the location of the webdriver on the local machine
			System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
			//Instantiate the instance of the Chrome Driver
			WebDriver driver = new ChromeDriver();
			//Direct the driver to the location of the site
			driver.get("http://talk-shop.net");
			
			
			//Flow to get to speaker listings, set to search for steve
			driver.findElement(By.id("speakerButton")).click();
			driver.findElement(By.id("search")).sendKeys("steve");
			Thread.sleep(3000);
			driver.findElement(By.id("searchButton")).click();
			
			//Set to search for Steve Jobs
			Assert.assertEquals(driver.findElement(By.id("speakerName")).getText(), "Steve Jobs");
			
			driver.close();
 }
 
 @Test
 public static void searchForTeacher() throws InterruptedException{
	 		//Point the location of the webdriver on the local machine
			System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
			//Instantiate the instance of the Chrome Driver
			WebDriver driver = new ChromeDriver();
			//Direct the driver to the location of the site
			driver.get("http://talk-shop.net");
			
			
			//Flow to get to speaker listings, set to search for steve
			driver.findElement(By.id("teacherButton")).click();
			driver.findElement(By.id("search")).sendKeys("sloth");
			Thread.sleep(3000);
			driver.findElement(By.id("searchButton")).click();
			
			//Set to search for Sloth
			Assert.assertEquals(driver.findElement(By.id("speakerName")).getText(), "Sloth");
			
			driver.close();
 }
 
 
 
 @Test
 public static void profileExpand() throws InterruptedException{
	 	//Point the location of the webdriver on the local machine
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
		//Instantiate the instance of the Chrome Driver
		WebDriver driver = new ChromeDriver();
		//Direct the driver to the location of the site
		driver.get("http://talk-shop.net");
		
		
		//Flow to get to speaker listings and open the first profile
		driver.findElement(By.id("speakerButton")).click();
		driver.findElement(By.id("speakerName")).click();
		Thread.sleep(3000);
		
		
		//Assert the profile expands and button appears to contact speaker
		Assert.assertEquals(driver.findElement(By.id("contactButton")).getText(), "CONTACT THIS SPEAKER");
		
		driver.close();
		 
 }
 
 @Test
 public static void userLoginInvalid() throws InterruptedException{
 	
 		//Point the location of the webdriver on the local machine
 		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
 		//Instantiate the instance of the Chrome Driver
 		WebDriver driver = new ChromeDriver();
 		//Direct the driver to the location of the site
 		driver.get("http://talk-shop.net");
 	
 		//Open the header for sign-in and fill in the form
 		driver.findElement(By.className("topBarText")).click();
 		driver.manage().timeouts().implicitlyWait(100, TimeUnit.SECONDS);
 		Thread.sleep(3000);
 		driver.findElement(By.id("username")).sendKeys("jkhumpherys@gmail.com");
 		driver.findElement(By.id("password")).sendKeys("222222");
 		driver.manage().timeouts().implicitlyWait(100, TimeUnit.SECONDS);
 		Thread.sleep(5000);
 		driver.findElement(By.id("submit")).click();
 	
 		driver.findElement(By.className("topBarText")).click();
 	
 		//Test that the Login Error is enabled
 		Assert.assertTrue(driver.findElement(By.cssSelector("#loginErrors > span")).isEnabled(), "Login Error Not displayed");
 		
 		driver.close();
 }
 

@Test
public static void registerAsTeacher() throws InterruptedException{
		//Point the location of the webdriver on the local machine
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
		//Instantiate the instance of the Chrome Driver
		WebDriver driver = new ChromeDriver();
		//Direct the driver to the location of the site
		driver.get("http://talk-shop.net");
	
	
		driver.findElement(By.id("signup")).click();
		driver.findElement(By.id("teacher")).click();
		//Change before starting test in order to not create a a duplicate account
		driver.findElement(By.id("firstname")).sendKeys("Stringer");
		driver.findElement(By.id("lastname")).sendKeys("Bell");
		Thread.sleep(3000);
		//Change before starting test in order to not createa a duplicate account
		driver.findElement(By.id("email")).sendKeys("someone@gmail.com");
		driver.findElement(By.id("pword")).sendKeys("vin11235");
		driver.findElement(By.id("reenter")).sendKeys("vin11235");
		driver.findElement(By.id("lineone")).sendKeys("123 Test Drive");
		Thread.sleep(3000);
		driver.findElement(By.id("city")).sendKeys("Baltimore");
		driver.findElement(By.id("state")).click();
		driver.findElement(By.cssSelector("#state > option:nth-child(22)")).click();
		Thread.sleep(3000);
		driver.findElement(By.id("zip")).sendKeys("60188");
		driver.findElement(By.id("phone")).sendKeys("6302345677");
		driver.findElement(By.cssSelector("#joinform > input[type=checkbox]:nth-child(24)")).click();
		driver.findElement(By.id("agegroup")).click();
		driver.findElement(By.cssSelector("#agegroup > option:nth-child(6)")).click();
		driver.findElement(By.cssSelector("#checkboxdiv > ul > li:nth-child(7) > input[type=checkbox]")).click();
		Thread.sleep(3000);
		driver.findElement(By.id("bio")).sendKeys("Thanks for reading this bio!!");
 	
 	
		//New instance to upload an image
		WebElement UploadImg = driver.findElement(By.id("fileToUpload"));
		UploadImg.sendKeys("C:\\wamp\\www\\CIS425\\imageFolder\\anna.jpg");
 	
		//Clicking button to submit form
		driver.findElement(By.id("formSubmit")).click();
 	
		//Check if the user was able to get to the confirmation page
		Assert.assertEquals(driver.findElement(By.id("confirmRegistrationTitle")).getText(), "CONFIRMATION");
	
		driver.close();
	
}


@Test
public static void registerAsSpeaker() throws InterruptedException{
		//Point the location of the webdriver on the local machine
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
		//Instantiate the instance of the Chrome Driver
		WebDriver driver = new ChromeDriver();
	 	//Direct the driver to the location of the site
	 	driver.get("http://talk-shop.net");
	
	
	
	 	driver.findElement(By.id("signup")).click();
	 	driver.findElement(By.id("speaker")).click();
	 	//Change before starting test in order to not createa a duplicate account
	 	driver.findElement(By.id("firstname")).sendKeys("Someone");
	 	driver.findElement(By.id("lastname")).sendKeys("Bell");
	 	Thread.sleep(3000);
	 	//Change before starting test in order to not createa a duplicate account
	 	driver.findElement(By.id("email")).sendKeys("ssomend@gmail.com");
	 	driver.findElement(By.id("pword")).sendKeys("vin11235");
	 	driver.findElement(By.id("reenter")).sendKeys("vin11235");
	 	driver.findElement(By.id("lineone")).sendKeys("123 Test Drive");
	 	Thread.sleep(3000);
	 	driver.findElement(By.id("city")).sendKeys("Baltimore");
	 	driver.findElement(By.id("state")).click();
	 	driver.findElement(By.cssSelector("#state > option:nth-child(22)")).click();
	 	Thread.sleep(3000);
	 	driver.findElement(By.id("zip")).sendKeys("60188");
	 	driver.findElement(By.id("phone")).sendKeys("6302345677");
	 	driver.findElement(By.cssSelector("#joinform > input[type=checkbox]:nth-child(24)")).click();
	 	driver.findElement(By.cssSelector("#checkboxdiv > select:nth-child(1)")).click();
	 	driver.findElement(By.cssSelector("#checkboxdiv > select:nth-child(1) > option:nth-child(6)")).click();
	 	driver.findElement(By.id("agegroup")).click();
	 	driver.findElement(By.cssSelector("#agegroup > option:nth-child(6)")).click();
	 	driver.findElement(By.cssSelector("#checkboxdiv > ul > li:nth-child(7) > input[type=checkbox]")).click();
	 	Thread.sleep(3000);
	 	driver.findElement(By.id("bio")).sendKeys("Thanks for reading this bio!!");
	 	
	 	
	 	//New instance to upload an image
	 	WebElement UploadImg = driver.findElement(By.id("fileToUpload"));
	 	UploadImg.sendKeys("C:\\wamp\\www\\CIS425\\imageFolder\\anna.jpg");
	 	
	 	//Clicking button to submit form
	 	driver.findElement(By.id("formSubmit")).click();
	 	
	 	//Check if the user was able to get to the confirmation page
	 	Assert.assertEquals(driver.findElement(By.id("confirmRegistrationTitle")).getText(), "CONFIRMATION");
	 	
	 	driver.close();
	
}

@Test
public static void registerAsSpeakerWithoutMakingActive() throws InterruptedException{
	//Point the location of the webdriver on the local machine
			System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
			//Instantiate the instance of the Chrome Driver
			WebDriver driver = new ChromeDriver();
		 	//Direct the driver to the location of the site
		 	driver.get("http://talk-shop.net");
		
		
		 	driver.findElement(By.id("signup")).click();
		 	driver.findElement(By.id("speaker")).click();
		 	//Change before starting test in order to not create a a duplicate account
		 	driver.findElement(By.id("firstname")).sendKeys("Someone");
		 	driver.findElement(By.id("lastname")).sendKeys("Bell");
		 	Thread.sleep(3000);
		 	//Change before starting test in order to not create a a duplicate account
		 	driver.findElement(By.id("email")).sendKeys("ssomend@gmail.com");
		 	driver.findElement(By.id("pword")).sendKeys("vin11235");
		 	driver.findElement(By.id("reenter")).sendKeys("vin11235");
		 	driver.findElement(By.id("lineone")).sendKeys("123 Test Drive");
		 	Thread.sleep(3000);
		 	driver.findElement(By.id("city")).sendKeys("Baltimore");
		 	driver.findElement(By.id("state")).click();
		 	driver.findElement(By.cssSelector("#state > option:nth-child(22)")).click();
		 	Thread.sleep(3000);
		 	driver.findElement(By.id("zip")).sendKeys("60188");
		 	driver.findElement(By.id("phone")).sendKeys("6302345677");

		 	//Check if the user was able to get to the confirmation page
		 	Assert.assertEquals(driver.findElement(By.id("confirmRegistrationTitle")).getText(), "CONFIRMATION");
		 	
		 	driver.close();
}

@Test
public static void registerAsTeacherWithoutMakingActive() throws InterruptedException{
	//Point the location of the webdriver on the local machine
			System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
			//Instantiate the instance of the Chrome Driver
			WebDriver driver = new ChromeDriver();
			//Direct the driver to the location of the site
			driver.get("http://talk-shop.net");
		
		
			driver.findElement(By.id("signup")).click();
			driver.findElement(By.id("teacher")).click();
			//Change before starting test in order to not create a a duplicate account
			driver.findElement(By.id("firstname")).sendKeys("Stringer");
			driver.findElement(By.id("lastname")).sendKeys("Bell");
			Thread.sleep(3000);
			//Change before starting test in order to not create a a duplicate account
			driver.findElement(By.id("email")).sendKeys("someone@gmail.com");
			driver.findElement(By.id("pword")).sendKeys("vin11235");
			driver.findElement(By.id("reenter")).sendKeys("vin11235");
			driver.findElement(By.id("lineone")).sendKeys("123 Test Drive");
			Thread.sleep(3000);
			driver.findElement(By.id("city")).sendKeys("Baltimore");
			driver.findElement(By.id("state")).click();
			driver.findElement(By.cssSelector("#state > option:nth-child(22)")).click();
			Thread.sleep(3000);
			driver.findElement(By.id("zip")).sendKeys("60188");
			driver.findElement(By.id("phone")).sendKeys("6302345677");
			
			//Check if the user was able to get to the confirmation page
		 	Assert.assertEquals(driver.findElement(By.id("confirmRegistrationTitle")).getText(), "CONFIRMATION");
		 	
		 	driver.close();
	
}


@Test
public static void deleteUser() throws InterupptedException{
	//Point the location of the webdriver on the local machine
	System.setProperty("webdriver.chrome.driver", "C:\\Users\\Steven\\Documents\\chromedriver_win32\\chromedriver.exe");
	//Instantiate the instance of the Chrome Driver
	WebDriver driver = new ChromeDriver();
	//Direct the driver to the location of the site
	driver.get("http://talk-shop.net");
	
	driver.findElement(By.className("topBarText")).click();
		driver.manage().timeouts().implicitlyWait(100, TimeUnit.SECONDS);
		Thread.sleep(3000);
		driver.findElement(By.id("username")).sendKeys("stevejobs@apple.com");
		driver.findElement(By.id("password")).sendKeys("22222");
		driver.manage().timeouts().implicitlyWait(100, TimeUnit.SECONDS);
		Thread.sleep(5000);
		driver.findElement(By.id("submit")).click();
		Thread.sleep(3000);
		driver.findElement(By.cssSelector("#login-content")).click();
		driver.findElement(By.cssSelector("#deleteProfileButton > p")).click();
		
		//Check if the user has been deleted 
		//Need Assert Statement to check if anybody is logged in 
		
		driver.close(); 

}
}
