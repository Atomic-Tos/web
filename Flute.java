import java.math.BigDecimal;
import java.math.RoundingMode;
import java.text.DecimalFormat;
import java.util.Scanner;

public class Flute {

    public static BigDecimal percentOf(BigDecimal percent, BigDecimal value) {
        return percent.divide(BigDecimal.valueOf(100), 10, RoundingMode.HALF_UP)
                      .multiply(value);
    }

    private static String repeatZeros(int count) {
        StringBuilder sb = new StringBuilder();
        for (int i = 0; i < count; i++) {
            sb.append("0");
        }
        return sb.toString();
    }

    public static String format(BigDecimal number, int decimals) {
        number = number.setScale(decimals, RoundingMode.HALF_UP);

        String pattern = "0";
        if (decimals > 0) {
            pattern += "." + repeatZeros(decimals);
        }

        DecimalFormat df = new DecimalFormat(pattern);
        return df.format(number);
    }

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        System.out.println("Enter flute length in cm:");
        BigDecimal length = new BigDecimal(scanner.nextLine().trim());

     
        BigDecimal pa  = new BigDecimal("90.00");
        BigDecimal dha = new BigDecimal("77.40");
        BigDecimal ni  = new BigDecimal("68.80");
        BigDecimal sa  = new BigDecimal("63.90");
        BigDecimal re  = new BigDecimal("54.50");
        BigDecimal ga  = new BigDecimal("46.80");
        BigDecimal ma  = new BigDecimal("39.85");

 
        BigDecimal paLen  = percentOf(pa, length);
        BigDecimal dhaLen = percentOf(dha, length);
        BigDecimal niLen  = percentOf(ni, length);
        BigDecimal saLen  = percentOf(sa, length);
        BigDecimal reLen  = percentOf(re, length);
        BigDecimal gaLen  = percentOf(ga, length);
        BigDecimal maLen  = percentOf(ma, length);


        System.out.println("\n*** Flute Note Lengths ***");
        System.out.println("Pa : " + format(paLen, 2) + " cm");
        System.out.println("Dha: " + format(dhaLen, 2) + " cm");
        System.out.println("Ni : " + format(niLen, 2) + " cm");
        System.out.println("Sa : " + format(saLen, 2) + " cm");
        System.out.println("Re : " + format(reLen, 2) + " cm");
        System.out.println("Ga : " + format(gaLen, 2) + " cm");
        System.out.println("Ma : " + format(maLen, 2) + " cm");

        scanner.close();
    }
}

class Note {
    String name;
    BigDecimal length;
}
