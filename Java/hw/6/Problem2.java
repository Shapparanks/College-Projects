import java.util.*;

public class Problem2 {
    public static void main(String[]args){
        try{
            System.out.print("Enter a String: ");
            
            Scanner input = new Scanner(System.in);
            
            String st = input.next();
                int[] calculate = count(st);
            
            for(int i = 0; i < calculate.length; i++){
                if(calculate[i] !=0){
                    System.out.println("counts[" + i + "] is " + calculate[i]);
                }
            }
        }
            catch(Exception e) {
                System.out.println("Exception has occured. The program will now exit. ");
                System.exit(0);
        
            }  
        }
    public static int[] count(String x) {
        int [] temp = new int[10];
            for(int i = 0; i < x.length(); i++){
                
                if(Character.isDigit(x.charAt(i))){
                    
                    String alpha = Character.toString(x.charAt(i));
                
                    int bravo = Integer.parseInt(alpha);

                    temp[bravo] = temp[bravo] + 1;

                }
            }
                return temp;
    }
}
    

