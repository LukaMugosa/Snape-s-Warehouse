import javax.swing.JOptionPane;

public class TestGUI {

	public static void main(String[] args) {
		String odgovor = JOptionPane.showInputDialog("Unesite dva broja");
		String [] rr = odgovor.split("\\s+"); // razdvajanje - jedna ili vise bjelina
		int sabirak1 = Integer.parseInt(rr[0]);
		int sabirak2 = Integer.parseInt(rr[1]);
		System.out.println(sabirak1 + sabirak2);
		
		// regularni izrazi - vidi fajl JavaRE.pdf
		
		// Zadatak 1
		String s1 = "Joe"; 
		String regex = "Joe|Jim";
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "Jim"; 
		regex = "J(oe|im)";
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "Jimmy";
		System.out.println(s1 + " " + s1.matches(regex));
		// System.out.println(s1 + " " + s1.matches(regex));
		
		// Zadatak 2
		s1 = "1234"; 
		regex = "\\d*(0|5)"; // niz cifara koji zavrsava sa 0 ili 5
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "1045"; 
		regex = "[0-9]*(0|5)"; // niz cifara koji zavrsava sa 0 ili 5
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "Jimmy1045";
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "505010";
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "Jim 1040 Joe"; 
		System.out.println(s1 + " " + s1.matches(regex));

		// Zadatak 3
		s1 = "abca"; 
		regex = "(\\w\\w)*"; // niz slova ili cifara parne duzine 
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "1045"; 
		regex = "([A-Za-z0-9][A-Za-z0-9])*"; // niz slova ili cifara parne duzine
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "Jimmy1045";
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "505010a";
		System.out.println(s1 + " " + s1.matches(regex));
		s1 = "Jim1040Joe"; 
		System.out.println(s1 + " " + s1.matches(regex));

		// Zadatak 4
		s1 = "abca"; 
		regex = "[b-z]*(a[b-z]*a[b-z]*)*"; // niz malih slova sa parnim brojem slova a 
		System.out.println(s1 + " " + s1.matches(regex)); // true - ima dva slova a
		s1 = "ccgfgag"; 
		System.out.println(s1 + " " + s1.matches(regex)); // false - ima jedno slovo 
		s1 = "JimmyaJonesa";
		System.out.println(s1 + " " + s1.matches(regex)); // false - sadrzi velika slova
		s1 = "sdfdggfabaaagagahhhh";
		System.out.println(s1 + " " + s1.matches(regex)); // true
		s1 = "enkaenapetarjovan"; 
		System.out.println(s1 + " " + s1.matches(regex)); // true		
		
		// Otvaranje prozora
		Prozor pr = new Prozor();
	}

}
 