import java.util.*;

public class Problem3 {

    public static void main(String[] args){

        System.out.print("Eenter the first string: ");
        
        Scanner input = new Scanner(System.in);
        
        String alpha = input.next();

        System.out.print("Enter the second stirng: ");

        String bravo = input.next();

        if(anagram(alpha,bravo)){
            System.out.println(" Your input is an anagram. ");
        }
        else {
            System.out.println(" Your input is not anagram.");
        }

    }

    public static boolean anagram (String a1, String b1) {
        a1 = a1.toLowerCase();
        b1 = b1.toLowerCase();
        a1 = a1.replace(" ", "");
        b1 = b1.replace(" ", "");
        a1 = a1.replace("-", "");
        b1 = b1.replace("-", "");
        char[] chr_ray1 = a1.toCharArray();
        char[] chr_ray2 = b1.toCharArray();
        
        if(chr_ray1.length != chr_ray2.length) {
            return false;
        }
        Arrays.sort(chr_ray1);
        Arrays.sort(chr_ray2);
        for(int index = 0; index<chr_ray1.length; index++){
            if(chr_ray1[index] != chr_ray2[index]){
                return false;
            }
        }
                return true;
        }
    }
    

