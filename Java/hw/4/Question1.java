//Importing Scanner and Random Utility
import java.util.Random;
import java.util.Scanner;

public class Question1 {

public static void main (String args[]) {
  
  
Scanner input = new Scanner (System.in);

//Always prints this after a questions is answered.
while (true) {

  System.out.println("Main menu ");
  
  System.out.println("1: Addition");
  
  System.out.println("2: Subtraction");
  
  System.out.println("3: Multiplication");
  
  System.out.println("4: Division");
  
  System.out.println("5: Exit");
  
  System.out.print("Enter a choice: ");
  
  
double res = 0;
int num1,num2,r;
Random randomNumbers = new Random();

   //Generate random #'s
  num1 = randomNumbers.nextInt(9);
  num2 = randomNumbers.nextInt(9);
  int ch=input.nextInt();

  switch(ch) {     

//Addition of #'s
  case 1: {
   
    System.out.println("What is "+num1+" + "+num2);
    res=num1+num2;
    r=input.nextInt();
  if(res==r) {
    System.out.println("Correct"); }

    else {
  System.out.println("Your answer is wrong.");
  System.out.println("The correct answer is "+res);}
      
    break; }
  
//Subtraction of #'s
  case 2:{
   
  if(num1>=num2) {
    System.out.println("What is "+num1+" - "+num2);
    res=num1-num2;}

    else {
      System.out.println("What is "+num2+" - "+num1);
      res=num2-num1;}
      r=input.nextInt();

  if(res==r) {
    System.out.println("Correct");}

    else{
      System.out.println("Your answer is wrong.");
      System.out.println("The correct answer is "+res);}

      break; }
    
//Mulitplication of #'s
  case 3: {
    System.out.println("What is "+num1+" * "+num2);
    res=num1*num2;
    r=input.nextInt();
  
  if(res==r) {
    System.out.println("Correct");}

    else {
      System.out.println("Your answer is wrong.");
      System.out.println("The correct answer is "+res);}
   
    break; }
    
//Division on #'s
  case 4: {
    
  if(num2==0) {
    System.out.println("divisor is zero"); }
    
    else{
      System.out.println("What is "+num1+" / "+num2);
      res=num1/num2;}
      r=input.nextInt();

    if(res==r) {
      System.out.println("Correct");}

      else {
        System.out.println("Your answer is wrong.");
        System.out.println("The correct answer is "+res);}
      break; }
  
  case 5:
    System.out.println("good bye!");
    System.exit(1);

  
  default:
    System.out.println("Invalid input");

    }
   }
  }
 }
