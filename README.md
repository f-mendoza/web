# AOV
Administración de organizaciones de acción voluntaria

Es una aplicación que facilita la administración de organizaciones con voluntarios. Principalmente facilita la gestión de actividades y la participación de los voluntarios, ya sea mediante un organigrama con una estructura jerárquica o más horizontal.

Se basa principalmente en las siguientes características:
* Administración del listado de personas que pertenecen a la organización (incluye voluntarios y empleados). Cada persona…
  * …puede tener (e idealmente tiene) su usuario en el sistema.
  * …pertenece a al menos una estructura de la organización (salvo que haya sido dado de baja de la misma, y pertenezca información sobre ella).
  * …posee permisos en relación a los grupos a los que pertenece, y que le hayan sido delegados.
  * …delegar sus permisos a otros usuarios y estructuras.
* Organigrama de la organización, en forma de árbol. Cada estructura…
  * …puede crear nuevas sub-estructuras, incluyendo en la misma a personas que ya pertenecen a esa estructura (o, con un permiso especial, de otras estructuras).
  * …puede tener una sub-estructura (usualmente llamada `coord`) a la que se le transfieran los permisos de administrarla.
  * …posee un nombre corto, único dentro de la estructura padre, con el que conforma una ruta. Por ejemplo `/f1/log/coord` puede hacer referencia al grupo `coord` dentro del área `log`, dentro de la filial `f1`. Esta ruta cumple varias funciones, siendo una de ellas la URL de la estructura.
  * …posee permisos que le hayan sido delegados, que delega en sus usuarios.
  * …puede delegar sus propios permisos a personas y sub-estructuras pertenecientes a la misma, y a estructuras ajenas. No se permite delegar permisos directamente de una estructura a una persona ajena a la misma, ya que debe ser en base a un rol (en estos casos, debe crearse una estructura que defina el rol).
  * …administrar eventos propios.
* Administración de eventos, organizados por distintas estructuras.
  * Pueden ser presenciales o virtuales.
  * Pueden ser limitados a su misma estructura, o a estructuras superiores o "hermanas".
  * Las personas indican su disponibilidad mediante su usuario, u otro usuario con permisos necesario lo hace por ellas. La disponibilidad pueden dividirse en franjas horarias dentro del horario total, y en cada una se indica:
    * si pueden asistir o no, o no lo saben todavía ("a confirmar") en dicha franja;
    * un texto con observaciones, que queden por fuera del sistema.
  * Pueden ser convocatoria manual o automática. Es decir, si es manual el administrador del evento debe indicar quiénes quedan confirmados al evento, y quiénes no; y si es automática, todos los que tienen disponibilidad quedan confirmados.
  * Pueden solicitar otra información sobre la persona. Por ejemplo, si pueden transportar materiales, si poseen medio de transporte propio o necesitan traslado, si poseen ropa institucional, si poseen algún conocimiento determinado, etc.
