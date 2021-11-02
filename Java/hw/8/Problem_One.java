//I COULDN'T FIGURE OUT HOW TO GET THE 45 TO BE IN THE OUTPUT. 

import java.util.*;

public class Problem_One {
    
    
public static ArrayList<String> split(String s, String delimiters){
        ArrayList<String> aLst = new ArrayList<String>();
        ArrayList<Character> delims = new ArrayList<Character>();

        for(int i = 0;i < delimiters.length();++i){
            delims.add(delimiters.charAt(i)); }
        int alpha = 0;
        int beta = alpha+1;
        
        while(beta < s.length()){
            if(delims.contains(s.charAt(beta))){
                String t = s.substring(alpha, beta);
                aLst.add(t);
                alpha = beta+1;
                ++beta; }
            else {
                //otherwise increment value  j
                ++beta; }
        }
        //returning the list
        aLst.add(s.substring(alpha));
        return aLst;
    }
   
    public static void main(String[] args) {
        //testing method
        System.out.print("Enter a string: ");
        Scanner input = new Scanner(System.in);
        ArrayList<String> s = split(input.nextLine(), input.nextLine());
        for (String string : s) {
            System.out.print(string + " ");
        }
    }
}
        

    




