import java.util.Scanner;

//Main class
public class Project4 {
   public static void main(String[] args) {

       //Initalize scanner for user input
       Scanner input = new Scanner(System.in);
        System.out.print("Enter the first complex number: ");

       double real = input.nextDouble();
       double imaginary = input.nextDouble();

       //Get second set of complex numbers from user
       CompNum complexA = new CompNum(real,imaginary);
        System.out.print("Enter the second complex number: ");

       real = input.nextDouble();
       imaginary = input.nextDouble();

       input.close();

       //Show user inputs in outpt
       CompNum complexB = new CompNum(real,imaginary);
        System.out.println("complexA: " + complexA);
            System.out.println("complexB: " + complexB);

        //Addition portion of output
       CompNum add = complexA.add(complexB);
        System.out.println(complexA + " + " + complexB + " = "  + add);

        //Subtraction portion of output
       CompNum sub = complexA.subtract(complexB);
        System.out.println(complexA + "-" + complexB + " = " + sub);

        //Multiplication portion of output
       CompNum multi = complexA.multiplyBy(complexB);
        System.out.println(complexA + "*" + complexB + " = "  + multi);

        //Division portion of output
       CompNum div = complexA.divideBy(complexB);
        System.out.println(complexA + "/" + complexB + " = "  + div);
            System.out.println("|" + complexA + "| = " + complexA.abs());
   }

}
 class CompNum {

    private double real;
    private double fake;
 
    //default constructor
    public CompNum() {
 
        real = fake = 0;
    }
 
    //parameter constructor
    public CompNum(double r, double i) {
 
        real = r;
        fake = i;
    }
 
    //parameter constructor 2
    public CompNum(double a) {
 
        real = a;
        fake = 0;
    }
 
    //copy constructor
    public CompNum(CompNum diff){
 
        real = diff.real;
        fake= diff.fake;
    }
    public double getReal() {
        return real;
    }
    public double getfakeinary() {
        return fake;
    }
 
    //toString method
 
    public String toString() {
        return "(" + String.format("%.2f", real) + "  +  " + String.format("%.2f", fake) + "i)";
 
    }
 
    //function that adds
 
    public CompNum add(CompNum diff){
        CompNum add = new CompNum();
 
        add.real = real  +  diff.real;
        add.fake = fake  +  diff.fake;
        return add;
    }
 
    //Subtraction Function
    public CompNum subtract(CompNum diff){
        CompNum sub = new CompNum();
 
        sub.real = real - diff.real;
        sub.fake = fake - diff.fake;
        return sub;
 
    }
 
    //Multiplication function
 
    public CompNum multiplyBy(CompNum diff){
        CompNum mul = new CompNum();
 
        mul.real = real * diff.real  +  fake * diff.fake;
        mul.fake = fake * diff.real  +  diff.fake * real;
        return mul;
    }
 
    //Division Function
 
    public CompNum divideBy(CompNum diff){
        CompNum divide = new CompNum();
 
        divide.real=((real * diff.real) + (fake * diff.fake))/((diff.real * diff.real) + (diff.fake * diff.fake));
        divide.fake=((fake * diff.real)-(real * diff.fake))/((diff.real * diff.real) + (diff.fake * diff.fake));
        return divide;
    }

    public double abs(){
        return Math.sqrt(real * real  +  fake * fake);
    }
    public boolean isRealPart(){
        return fake == 0;
    }
 
    public boolean isfakeinaryPart(){
        return real == 0;
    }
 }