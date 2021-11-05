import java.awt.Canvas;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.Graphics;
import java.awt.event.MouseListener;
import java.awt.image.BufferStrategy;
import javax.swing.JFrame;

import org.w3c.dom.events.MouseEvent;

public class animacao1 extends Canvas implements Runnable, MouseListener {
	
	int right = 0;
	int left = 1;
	int top = 2;
	int down = 3;
	int x = 0;
	int y = 0;
	int dir = right;
	int mx;
	int my;
	boolean isPressed;

	public animacao1() {
		this.addMouseListener(this);
		this.setPreferredSize(new Dimension(480, 480));
	}
	
	public void update() {
		// identifica a direção
		if (dir == right) {
			x+=4;
		} else if (dir == left) {
			x-=4;
		} else if (dir == top) {
			y-=4;
		} else if (dir == down) {
			y+=4;
		}
		
		// muda a direção
		if (x + 50 >= 480 && y == 0) {
			dir = down;
		} else if (x + 50 >= 480 && y + 50 >= 480) {
			dir = left;
		} else if (x <= 0 && y + 50 >= 480) {
			dir = top;
		} else if (x <= 0 && y <= 0) {
			// fica movendo infinitamente
			dir = right;
		}
		
		if (isPressed) {
			isPressed = false;
			detectarClique();
		}
	}
	
	public void detectarClique() {
		if (mx >= x && mx < x + 50) {
			if (my >= y && my < y + 50) {
				System.out.println("Clicado");
			}
		}
	}
	
	public void render() {
		BufferStrategy bs = this.getBufferStrategy();
		
		if (bs == null) {
			this.createBufferStrategy(3);
			return;
		}
		
		Graphics g = bs.getDrawGraphics();
		g.setColor(Color.BLACK);
		g.fillRect(0, 0, 480, 480);
		
		if (dir == right) {
			g.setColor(Color.red);
		} else if (dir == left) {
			g.setColor(Color.YELLOW);
		} else if (dir == top) {
			g.setColor(Color.blue);
		} else if (dir == down) {
			g.setColor(Color.cyan);
		} 
		
		g.fillRect(x, y, 50, 50);
		g.dispose();
		bs.show();
	}
	
	public static void main(String[] args) {
		animacao1 game = new animacao1();
		JFrame frame = new JFrame();
		frame.setTitle("Exercício Lógica");
		frame.add(game);
		frame.setResizable(false);
		frame.pack();
		frame.setLocationRelativeTo(null);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setVisible(true);
		new Thread(game).start();
	}
	
	@Override
	public void run() {
		double fps = 60.0;
		
		while (true) {
			update();
			render();
			
			try {
				Thread.sleep((int)(1000/fps));;
			} catch (InterruptedException e) {
				
			}
		}
	}
	
	@Override
	public void mouseClicked(java.awt.event.MouseEvent e) {
		mx = e.getX();
		my = e.getY();
		
		isPressed = true;
	}

	@Override
	public void mousePressed(java.awt.event.MouseEvent e) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void mouseReleased(java.awt.event.MouseEvent e) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void mouseEntered(java.awt.event.MouseEvent e) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void mouseExited(java.awt.event.MouseEvent e) {
		// TODO Auto-generated method stub
		
	}
}