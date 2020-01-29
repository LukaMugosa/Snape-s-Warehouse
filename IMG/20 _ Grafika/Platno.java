import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Polygon;

import javax.swing.JOptionPane;
import javax.swing.JPanel;

public class Platno extends JPanel {

	
	/* (non-Javadoc)
	 * @see javax.swing.JComponent#paintComponent(java.awt.Graphics)
	 */
	@Override
	protected void paintComponent(Graphics g) {
		// TODO Auto-generated method stub
		// super.paintComponent(g);
		Graphics2D g2 = (Graphics2D)g;
		
		g2.setColor(Color.BLUE);
		g2.fillRect(20, 20, 70, 40); // pravougaonik
		g2.drawRect(90, 60, 40, 40); // kvadrat
		g2.fillArc(100, 100, 60, 40, 45, 315); // dio luka elipse
		g2.drawOval(300, 100, 40, 40); // krug
		
		// crtanje stringa
		g2.setFont(new Font("Courier New", Font.BOLD, 36));
		g2.drawString("PMF is the best", 120, 200);
		
		// crtanje poligona 
		int[] aps = new int[]{150,291,432,291};
		g2.setColor(Color.RED);
		int[] ord = new int[]{150,9,150,291};
		g2.drawPolygon(new Polygon(aps, ord, aps.length));
		
	}

	
}
