package ventas.model.entities;

import java.math.BigDecimal;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2018-04-12T17:47:12")
@StaticMetamodel(Producto.class)
public class Producto_ { 

    public static volatile SingularAttribute<Producto, BigDecimal> descuento;
    public static volatile SingularAttribute<Producto, String> idProducto;
    public static volatile SingularAttribute<Producto, BigDecimal> precioVenta;
    public static volatile SingularAttribute<Producto, String> nombre;

}