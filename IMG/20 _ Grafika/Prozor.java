import java.awt.Dimension;

import javax.swing.JFrame;
import javax.swing.JOptionPane;

public class Prozor extends JFrame {

	/**
	 * @throws HeadlessException
	 */
	public Prozor()  {
		setTitle("Nas prvi prozor");
		this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); // zatvaranje prozora zatvara i aplikaciju
		this.setLocationRelativeTo(null); // postavlja nas prozor u sredinu ekrana
		setSize(400, 300); // podesava velicinu prozora
		this.setSize(new Dimension(700,500)); // podesava velicinu prozora preko Dimension objekta
		Platno pp = new Platno(); // kreiramo novi panel
		setContentPane(pp); // umjesto postojeceg panela postavljamo nas panel
		setVisible(true); // prozor je vidljiv
	}

	
}
