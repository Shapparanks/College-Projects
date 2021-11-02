import java.util.Scanner;  

public class Question4 {
  public static void main(String[] args) {
    //Scanner to recieve and soon to store user input
    Scanner input = new Scanner(System.in);
        System.out.print("Enter a positive Integer: ");
    
        int num = input.nextInt();
    
        //The root inside
    
        int iroot = num;
    
        //The root outside 
    
        int oroot = 1;
    
        int d = 2;
    
    while(d * d <= iroot){
      if(iroot%(d * d)== 0){
        iroot = iroot/(d * d);
        oroot = oroot * d; }
      else
        d += 1; }

    //print the result, different printing statements depending on inside/outside root.
    if(oroot!= 1 && iroot!= 1)
        System.out.println("sqrt("+ num +") is "+ oroot +"*sqrt("+ iroot + ")");
        if(iroot == 1 && oroot != 1)
            System.out.println("sqrt("+ num +") is "+ oroot);
        if(iroot != 1 && oroot == 1)
            System.out.println("sqrt("+ num +") is " +"sqrt("+ iroot + ")");
        if(iroot == 1 && oroot == 1)
            System.out.println("sqrt("+ num +") is " + 1);
  }
}
