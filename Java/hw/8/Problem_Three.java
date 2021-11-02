import java.util.ArrayList;
import java.util.GregorianCalendar;
import java.time.ZonedDateTime;

 class Flight {
        private String flightNo;
        private GregorianCalendar departureTime;
        private GregorianCalendar arrivalTime;

        public Flight(String flightNo, GregorianCalendar departureTime, GregorianCalendar arrivalTime) {
                this.flightNo = flightNo;
                this.departureTime = departureTime;
                this.arrivalTime = arrivalTime;
        }

        public String gFlightNo() {
                return flightNo;
        }
        public GregorianCalendar getDepartureTime() {
                return departureTime;
        }

        public GregorianCalendar getArrivalTime() {
                return arrivalTime;
        }

        public void setDepartureTime(GregorianCalendar departureTime) {
                this.departureTime = departureTime;
        }

        public void setArrivalTime(GregorianCalendar arrivalTime) {
                this.arrivalTime = arrivalTime;
        }
        
        public int getFlightTime() {
                ZonedDateTime zdt1 = departureTime.toZonedDateTime() ;
                ZonedDateTime zdt2 = arrivalTime.toZonedDateTime() ;
                return (zdt2.getDayOfYear()* 24 * 60 + zdt2.getHour()* 60 + zdt2.getMinute())-(zdt2.getDayOfYear()* 24 * 60 + zdt1.getHour() * 60 + zdt1.getMinute());
        }

}

 class Itinerary {
        
        ArrayList<Flight> list;
        
        public Itinerary(ArrayList<Flight> list) {
                this.list = list;
        }

        //sum of all flight times
        public int getTotalFlightTime(){
                int total=0;
                for(int i=0;i<list.size();i++)
                        total = total + list.get(i).getFlightTime();            
                return total;
        }

        //first departure time - last arrive time
        public int getTotalTravelTime(){
                ZonedDateTime zdt1 = list.get(0).getDepartureTime().toZonedDateTime();
                ZonedDateTime zdt2 = list.get(list.size() - 1).getArrivalTime().toZonedDateTime();
                return (zdt2.getDayOfYear() * 24 * 60 + zdt2.getHour() * 60 + zdt2.getMinute())- (zdt2.getDayOfYear() * 24 * 60 + zdt1.getHour() * 60 + zdt1.getMinute());
        }
}

 public class Problem_Three {
        public static void main(String[] args) {

                ArrayList<Flight> flights = new ArrayList<Flight>();

                flights.add(new Flight("US230",

                new GregorianCalendar(2014, 4, 5, 5, 5, 0),

                new GregorianCalendar(2014, 4, 5, 6, 15, 0)));

                flights.add(new Flight("US235",

                new GregorianCalendar(2014, 4, 5, 6, 55, 0),

                new GregorianCalendar(2014, 4, 5, 7, 45, 0)));

                flights.add(new Flight("US237",

                new GregorianCalendar(2014, 4, 5, 9, 35, 0),

                new GregorianCalendar(2014, 4, 5, 12, 55, 0)));

                Itinerary itinerary = new Itinerary(flights);

                System.out.println(itinerary.getTotalFlightTime()+ " minutes");
                System.out.println(itinerary.getTotalTravelTime()+ " minutes");
                
                 
                
        }

}