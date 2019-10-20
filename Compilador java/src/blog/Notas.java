package blog;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.*;

public class Notas extends JFrame {

   BorderLayout borderLayout1 = new BorderLayout();
   JPanel panel = new JPanel();
   JMenuBar barraDeMenu = new JMenuBar();
   JMenu archivo = new JMenu();
   JTextArea areaDeTexto = new JTextArea();
   JScrollPane scrollPane = new JScrollPane();
   JFileChooser jfc = new JFileChooser();

   JMenuItem archivo_Nuevo = new JMenuItem();
   JMenuItem archivo_Abrir = new JMenuItem();
   JMenuItem archivo_Guardar = new JMenuItem();
   JMenuItem archivo_GuardarComo = new JMenuItem();
   JMenuItem archivo_Salir = new JMenuItem();
   
   public Notas() {
   panel.setLayout(borderLayout1);
   super.setTitle("Compilador");
    
   archivo.setText("Archivo");
   archivo.setMnemonic('A');
   archivo_Nuevo.setText("Nuevo");
   archivo_Abrir.setText("Abrir");
   archivo_Guardar.setText("Guardar");
   archivo_GuardarComo.setText("Guardar como...");
   archivo_Salir.setText("Salir");
  
   barraDeMenu.add(archivo);
    
   archivo.add(archivo_Nuevo);
   archivo.add(archivo_Abrir);
   archivo.add(archivo_Guardar);
   archivo.add(archivo_GuardarComo);
   archivo.add(archivo_Salir);
    
   this.setJMenuBar(barraDeMenu);
   this.getContentPane().add(panel, BorderLayout.CENTER);
   this.getContentPane().setPreferredSize(new Dimension(500,400));
   this.getContentPane().add(scrollPane, BorderLayout.CENTER);
   scrollPane.getViewport().add(areaDeTexto, null);
    
   archivo_Nuevo.addActionListener(new ActionListener() {
     public void actionPerformed(ActionEvent e) {
       areaDeTexto.setText("");
     }
   });

   archivo_Abrir.addActionListener(new ActionListener() {
     public void actionPerformed(ActionEvent e) {
       if(e.getSource() == archivo_Abrir) {
         int abroArchivo = jfc.showOpenDialog(Notas.this);

         if(abroArchivo == jfc.APPROVE_OPTION) {
           File archivo = jfc.getSelectedFile();
           FileInputStream miArchivo;
           int sizeArchivo = Long.valueOf(archivo.length()).intValue();
             byte archivoALeer[]= new byte[sizeArchivo];
           try {
             miArchivo = new FileInputStream(archivo.getPath());
             miArchivo.read(archivoALeer);
             areaDeTexto.append(new String(archivoALeer));
             miArchivo.close();
           }
           catch(IOException ex)
           {
             System.out.println("Error : "+ex.getMessage());
           }
         }
         areaDeTexto.setCaretPosition(areaDeTexto.getDocument().getLength());
       }
     }
   });

   archivo_Guardar.addActionListener(new ActionListener() {
     public void actionPerformed(ActionEvent e) {
       File archivo = jfc.getSelectedFile();
       FileOutputStream miArchivo;
       String contenidoTexto = new String();
       try {
         miArchivo = new  FileOutputStream(archivo.getPath());
         contenidoTexto = (areaDeTexto.getText());
         miArchivo.write(contenidoTexto.getBytes());
         miArchivo.close();
       }
       catch(IOException IOException ) {
         System.out.println("Error : "+IOException .getMessage());
       }
     }
   });
  
   archivo_GuardarComo.addActionListener(new ActionListener() {
     public void actionPerformed(ActionEvent e) {
       if(e.getSource() == archivo_GuardarComo) {
         int guardoArchivo = jfc.showSaveDialog(Notas.this);

         if(guardoArchivo == jfc.APPROVE_OPTION) {
           File archivo = jfc.getSelectedFile();
           FileOutputStream miArchivo;
           String contenidoTexto = new String();
           try {
             miArchivo = new FileOutputStream(archivo.getPath());
             contenidoTexto = new String(areaDeTexto.getText());
             miArchivo.write(contenidoTexto.getBytes());
             miArchivo.close();
           }
           catch(IOException IOException ) {
             System.out.println("Error : "+IOException.getMessage());
           }
         }
       }
     }
   });
  
   archivo_Salir.addActionListener(new ActionListener() {
     public void actionPerformed(ActionEvent e) {
       System.exit(0);
     }
   });
    
   super.pack();
   super.show();
   }
   public static void main(String argv[]) {
     new Notas();
   }
}