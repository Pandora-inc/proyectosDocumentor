const app = new Vue({
	el: '#app',
	data: {
		RequesFile: [{
		nombreProyecto: '<Nombre del Proyecto>',
		versionProyecto: '<x.y.z>',
		frutas: ['Manzana', 'Pera', 'Banana'],
		versionesProyecto: [
			{ version: '<x.y.z>', fecha: '<dd/mm/aa>', nombre: '<nombre>', descripcion: '<especificaciones>' },
			{ version: '<x.y.z>', fecha: '<dd/mm/aa>', nombre: '<nombre>', descripcion: '<especificaciones>' },
			{ version: '<x.y.z>', fecha: '<dd/mm/aa>', nombre: '<nombre>', descripcion: '<especificaciones>' },
		],
		alcance: 'Describir el alcance, mencionar los proyectos asociados y determinar que se ve afectado por este documento.',
		definiciones: [
			{ abreviatura: 'abr', palabra: 'palabra', definicion: 'La definicion' },
			{ abreviatura: 'abr', palabra: 'palabra', definicion: 'La definicion 1' },
			{ abreviatura: 'abr', palabra: 'palabra', definicion: 'La definicion 2' },
			{ abreviatura: 'abr', palabra: 'palabra', definicion: 'La definicion 3' },
			{ abreviatura: 'abr', palabra: 'palabra', definicion: 'La definicion 4' },
			{ abreviatura: 'abr', palabra: 'palabra', definicion: 'La definicion 5' }
		],
		requerimientos: [
			{ nombre: 'Colocar el nombre del requerimiento funcional.', identificador: 'Identificación del requerimiento funcional (con un número o un conjunto de caracteres que debe verse reflejado en el apartado de definición, acrónimos y abreviaturas).', descripcion: 'Aquí se debe de realizar una descripción del requerimiento funcional. Se debe colocar información suficiente de tal manera que sirva de ayuda para el desarrollador del sistema. Cualquier representación gráfica debe ser anexada en este apartado.', prioridad: 'Atributo: Prioridad Alta /Media Alta / Media / Media Baja / Baja La prioridad es: <colocar una de las opciones>', rela: '<Identificador - Nombre REquereimiento Relacionado>' },
			{ nombre: 'Colocar el nombre del requerimiento funcional.', identificador: 'Identificación del requerimiento funcional (con un número o un conjunto de caracteres que debe verse reflejado en el apartado de definición, acrónimos y abreviaturas).', descripcion: 'Aquí se debe de realizar una descripción del requerimiento funcional. Se debe colocar información suficiente de tal manera que sirva de ayuda para el desarrollador del sistema. Cualquier representación gráfica debe ser anexada en este apartado.', prioridad: 'Atributo: Prioridad Alta /Media Alta / Media / Media Baja / Baja La prioridad es: <colocar una de las opciones>', rela: '<Identificador - Nombre REquereimiento Relacionado>' }
		],
		prioridadesReques: ['Alta', 'Media Alta', 'Media', 'Media Baja', 'Baja'],
		usabilidad: ['En este apartado se debe incluir la lista de todos los requerimientos que afecten la usabilidad.', 'Esto debe incluir: el tiempo que se tomar&aacute; un usuario en aprender a utilizar el sistema y se podr&iacute;a explicar por qu&eacute; debe ser r&aacute;pido el aprendizaje, los tiempos medibles de tarea para las tareas t&iacute;picas y los requerimientos para concordar con est&aacute;ndares.'],
		confiabilidad: ['Aquí se deben detallar los requerimientos de confiabilidad del sistema. Describa las características  de confiabilidad explicando la posibilidad del sistema de realizar las funciones para las que fue diseñado sin presentar fallos. ', 'Entre estos requerimientos puede mencionar características como la disponibilidad, el porcentaje de fallas máximo, etc.'],
		seguridad: 'Aquí se deben detallar los requerimientos de seguridad del sistema. Esto incluye si el acceso al sistema será controlado con nombres de usuario y contraseñas, que solo los usuarios con privilegios de administrador podrán acceder a las funciones administrativas y los usuarios normales no podrán.',
		eficiencia: 'En este apartado se debe ver reflejado las características de eficiencia del sistema. Se debe especificar: el tiempo de respuesta para una transacción (promedio), capacidad (número de clientes y transacciones), rendimiento del procesamiento (Ej. transacciones por segundo) y cuando el sistema se ha degradado cuál es el modo aceptable de operación.',
		mantenimientoYActualizacion: 'En este apartado se debe ver reflejado los requerimientos de mantenimiento y actualización. La capacidad de mantenimiento es la habilidad que se tiene para realizar cambios al producto en el tiempo y la capacidad de actualización es la habilidad que se tiene para entregar las versiones del producto a bajo costo a los clientes con un mínimo de tiempo de descarga. Una característica clave para apoyar este objetivo es la descarga automática de parches o actualizaciones y actualizaciones del equipo del usuario final. También debemos utilizar formatos para archivos de datos que incluyan suficientes metadatos para permitirnos trasformar con seguridad la información existente del usuario durante una actualización.',
		operabilidad: 'Especificar los requerimientos de soportabilidad y operabilidad del sistema. La soportabilidad la habilidad de proveer soporte técnico eficiente y a buen precio y la operabilidad es la habilidad que se tiene de hospedar y operar el software como un ASP (Proveedor de Servicios de Aplicaciones).',
		restriccionDeDiseno: ['En este apartado se debe indicar cualquier limitación de diseño en el sistema que es construido. ', 'Por ejemplo: lenguajes de software, requerimientos del proceso de software, uso de herramientas de desarrollo, componentes comprados, etc.'],
		documentacionYAyuda: ['En caso de que exista se debe describir los requerimientos, para la documentación en línea del usuario, sistemas de ayuda, ayuda sobre avisos, etc.'],
		interUsuario: ['Describir  las interfaces de usuario que van a hacer ejecutadas por el software.', 'No aplica en caso de que corresponda'],
		interSoftware: ['Hay que describir las interfaces de software hacia otros componentes del sistema.', 'Pueden ser: componentes comprados, reutilizados o realizados para subsistemas fuera del alcance de este documento.'],
		interHardware: ['Aquí se describen comentarios de cualquier interfaz de hardware que debe ser apoyada por el software, esto incluye: comportamiento, estructura lógica, etc.'],
		interComunicaciones: ['Se debe definir las interfaces de comunicaciones a los demás sistemas o dispositivos como: redes LAN y dispositivos seriales remotos.'],
		politicas: 'Debe responder la siguiente pregunta: ¿El producto satisface las políticas de la organización (por ejemplo, de privacidad y seguridad)? Sí. Describa cómo se satisfacen cada una de estas políticas. No. Describa los pasos a tomar para hacer que el producto las cumpla. No. No hay políticas que apliquen.',
		oontratosOtrasOrg: 'Debe responder la siguiente pregunta: ¿Fue algún componente o información producido por otra organización bajo contrato? Sí. Revise los detalles del contrato para derechos de propiedad y licenciamiento. No. No se requiere hacer nada al respecto.',
		propInt: [
			{ Componente: 'Nombre del producto', Dueno: 'Nosotros', Licencia: 'Marca Registrada', Estado: 'Registro pendiente', Comentarios: 'debemos usar "(TM)", no "(R)"' },
			{ Componente: 'Base de datos', Dueno: 'Distribuidor', Licencia: 'GNU GPL', Estado: 'En conformidad, cobra cuota estándar', Comentarios: 'Se limita a 2 procesadores/servidore' },
			{ Componente: 'Imágenes de clip-art', Dueno: 'Ninguna', Licencia: 'Dominio público', Estado: 'En conformidad', Comentarios: '' },
			{ Componente: 'Librería de controladores de sonido', Dueno: 'OS del Proyecto', Licencia: 'BSD', Estado: 'En conformidad', Comentarios: 'El indexador correo en un proceso aparte, no hace nuestro código GPL.' },
			{ Componente: 'Indexador de la máquina de búsqueda', Dueno: 'OS del Proyecto', Licencia: 'GPL', Estado: 'En conformidad', Comentarios: '' },
			{ Componente: 'Otras librerías', Dueno: 'OS del Proyecto', Licencia: 'BSD', Estado: 'En conformidad', Comentarios: '' },
			{ Componente: 'Patente de algoritmo especial', Dueno: 'Nosotros', Licencia: 'Patente pendiente', Estado: 'En conformidad', Comentarios: 'Búsqueda de patente terminada, aplicación de patente en revisión.' }
		],
		estandares: 'En este apartado se debe describir por referencia cualquier estándar aplicable y las secciones específicas de dichos  estándares que se apliquen al sistema, como son: estándares de calidad aspectos legales, interoperabilidad, internacionalización, estándares de seguridad de la información, compatibilidad del sistema operativo, etc.',
		Actores: [
			{ actor: 'Colocar un nombre representativo', descripcion: 'Breve descripción del rol que cumple actor' },
			{ actor: 'actor', descripcion: 'descripcion' }
		],
		cuResumen: [
			{ nombre: 'Colocar un nombre representativo', cu: 'Realizar un resumen del caso de uso.' },
			{ nombre: 'Colocar un nombre representativo', cu: 'Realizar un resumen del caso de uso.' },
			{ nombre: 'Colocar un nombre representativo', cu: 'Realizar un resumen del caso de uso.' },
			{ nombre: 'Colocar un nombre representativo', cu: 'Realizar un resumen del caso de uso.' }
		],
		cuEspecificaciones: [
			{
				codigo: 'Código',
				nombre: 'Colocar nombre del caso de uso.',
				descripcion: 'Describir la responsabilidad y el propósito del caso de uso.',
				requerimiento: 'Identificar los requerimientos que abarcan a este caso de uso.',
				precondicion: 'Tiene que ver con las condiciones en la que debe estar el sistema para que se ejecute el caso de uso. Ejemplo: registro y autenticación del cliente.',
				flujoNormal: 'En el flujo de casos de uso se describe lo que hace el actor y lo que hace el sistema en respuesta. Se expresa en forma de un diálogo entre actor y  sistema. El flujo básico del caso de uso describe lo que sucede dentro del sistema. Este flujo puede ser representado en forma gráfica. Hay que tomar en cuenta que el flujo de un caso de uso, debería tener entre cinco y siete pasos aproximadamente.',
				fnActorSistema: [{ actor: 'Describir cada paso alterno del flujo realizado por un actor.', sistema: 'Describir cada paso alterno del flujo realizado por algún recurso del sistema.' }],
				flujoAlterno: 'El flujo alterno se refleja el comportamiento alternativo debido a las irregularidades que ocurren en el flujo de eventos normal. Pueden ser tan  largos como sea  necesario para describir los eventos asociados al comportamiento alternativo.',
				faActorSistema: [{ actor: 'Describir cada paso alterno del flujo realizado por un actor.', sistema: 'Describir cada paso alterno del flujo realizado por algún recurso del sistema.' }],
				Poscondicion: 'Listar las condiciones en que se encuentra el sistema después de haberse ejecutado el sistema.',
				rEspeciales: 'Nombrar y describir cualquier requerimiento que no haya sido abarcado por el flujo normal o los alternos.',
				pExtension: 'Se debe mencionar y describir los puntos en los cuales el flujo de eventos se extiende por otros casos de uso.',
			}
		],
		docsRelacionados: [{ titulo: '<título>', fecha: '<dd/mm/aa>', organizacion: '<nombre>', id: '<Id documento>' }],
		nuevaComida: '',
		total: 0
		}]
	},
	methods: {
		Diagrama() { },

		agregarComida() {
			this.comida.push({
				nombre: this.nuevaComida, 
				cantidad: 0
			})
			this.nuevaComida = '';
		},
//		getAll () {
//		        return fetch('recuDatosReque.php').then(response => response.json());
//		    },
	},

	computed: {
		sumarMorfi() {
			this.total = 0;
			for (morfi of this.comida) {
				this.total = this.total + morfi.cantidad;
			}

			return this.total;
		}
	},

	created: function() {
		console.log(this.RequesFile);
	
		this.RequesFile = fetch('recuDatosReque.php').then(response => response.json());
	
//		console.log(this.RequesFile);
	
	
//		this.$http.get('recuDatosReque.php').then(function(response) {
//			this.RequesFile = response.body;
//		});
	},
})