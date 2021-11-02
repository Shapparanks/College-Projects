import java.util.*;

public class Prob1 {
    public static void main(String args[]) {
        Scanner input = new Scanner(System.in);
        
        int hr, min, sec;
        
        long c;
            System.out.print("Enter time1 (hour minute second): ");
            hr = input.nextInt();
            min = input.nextInt();
            sec = input.nextInt();
        
        Time fTIME = new Time(hr, min, sec);
            System.out.println(fTIME);
            System.out.println("Elapsed seconds in time1: " + fTIME.getSeconds());

            System.out.print("Enter time2 (elapsed time): ");
            c = input.nextLong();
        
        Time sTIME = new Time(c);
            System.out.println(fTIME);
            System.out.println("Elapsed seconds in time1: " + fTIME.getSeconds());

            System.out.println("time1.compareTo(time2)? " + fTIME.compareTo(sTIME));
        
        Time tTIME = fTIME.clone();
            System.out.println("time3 is created as a clone of time1 time1.compareTo(time3)? " + fTIME.compareTo(tTIME));
    }
}


class Time implements Cloneable, Comparable<Time> {

   private long clock;

   //the difference, measured in milliseconds, between the current time and midnight, January 1, 1970
   public Time() {
       clock = System.currentTimeMillis() / 1000;
   }

   public Time(long c) {
       this.clock = c;
   }

   public Time(int hr, int min, int sec) {
       clock = (((hr * 60) + min) * 60) + sec;
   }

   public int getHour() {
       return (int) (clock / 3600) % 24;
   }

   public int getMinute() {
       return (int) (clock  / 60) % 60;
   }

   public int getSecond() {
       return (int)clock % 60;
   }
  
   public long getSeconds(){
       return clock;
   }

   public String toString() {
       return String.format("%d hours %d minutes %d seconds", getHour(),
               getMinute(), getSecond());
   }

   @Override
   public int compareTo(Time arg0) {
       return (int) (clock - ((Time)arg0).clock);
   }
  
   public Time clone(){
       Time STIME = new Time();
       STIME.clock = clock;
       return STIME;
   }
  
   public boolean equals(Time T){
       return T.clock == clock;
   }
}
