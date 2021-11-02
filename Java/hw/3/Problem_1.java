import java.util.Scanner;

  public class Problem_1 {
  public static void main(String[] args) {

  Scanner input = new Scanner(System.in);
  //Ask user to input numerator
  System.out.println("Enter a numerator: ");
  int num=input.nextInt();
  // Ask user to input denominator
  System.out.println("Enter a denominator: ");
  int den=input.nextInt();
  //Loop to configure fractions and determine whether proper/improper
    if(num<den)
        System.out.print(num+" / "+den +" is a proper fraction.\n" );
    else{
        System.out.print(num+" / "+den +" is an improper fraction ");
  
        int remainder=num%den;
  
   int x=num/den;
    
    if(remainder==0){
  
        System.out.print("and it can be reduced to "+x+"\n");
}
    else {
        
        System.out.print("and its mixed fraction is "+x+" + "+remainder+" / "+den+"\n");
    }

   } 
  }
}

