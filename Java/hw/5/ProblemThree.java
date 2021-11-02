import java.util.Scanner;
public class ProblemThree {
    public static void main(String[] args){
    long time;
    Scanner input =new Scanner (System.in);
    System.out.print("Enter total seconds: ");
    time = input .nextInt();
    System.out.print(" The hours, minutes, and seconds for total seconds" + time + "is " +convert(time));
    } 

    public static String convert(long time)
        {
    long hours,minutes,seconds;
        hours = time/3600;
        time %= 3600;
        minutes = time/60;
        time %= 60;
        seconds = time/1;

            return hours+":"+minutes+":"+seconds+ " ";
}
}
