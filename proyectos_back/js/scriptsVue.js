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
			{ nombre: 'Colocar el nombre del requerimiento funcional.', identificador: 'Identificaci�n del requerimiento funcional (con un n�mero o un conjunto de caracteres que debe verse reflejado en el apartado de definici�n, acr�nimos y abreviaturas).', descripcion: 'Aqu� se debe de realizar una descripci�n del requerimiento funcional. Se debe colocar informaci�n suficiente de tal manera que sirva de ayuda para el desarrollador del sistema. Cualquier representaci�n gr�fica debe ser anexada en este apartado.', prioridad: 'Atributo: Prioridad Alta /Media Alta / Media / Media Baja / Baja La prioridad es: <colocar una de las opciones>', rela: '<Identificador - Nombre REquereimiento Relacionado>' },
			{ nombre: 'Colocar el nombre del requerimiento funcional.', identificador: 'Identificaci�n del requerimiento funcional (con un n�mero o un conjunto de caracteres que debe verse reflejado en el apartado de definici�n, acr�nimos y abreviaturas).', descripcion: 'Aqu� se debe de realizar una descripci�n del requerimiento funcional. Se debe colocar informaci�n suficiente de tal manera que sirva de ayuda para el desarrollador del sistema. Cualquier representaci�n gr�fica debe ser anexada en este apartado.', prioridad: 'Atributo: Prioridad Alta /Media Alta / Media / Media Baja / Baja La prioridad es: <colocar una de las opciones>', rela: '<Identificador - Nombre REquereimiento Relacionado>' }
		],
		prioridadesReques: ['Alta', 'Media Alta', 'Media', 'Media Baja', 'Baja'],
		usabilidad: ['En este apartado se debe incluir la lista de todos los requerimientos que afecten la usabilidad.', 'Esto debe incluir: el tiempo que se tomar&aacute; un usuario en aprender a utilizar el sistema y se podr&iacute;a explicar por qu&eacute; debe ser r&aacute;pido el aprendizaje, los tiempos medibles de tarea para las tareas t&iacute;picas y los requerimientos para concordar con est&aacute;ndares.'],
		confiabilidad: ['Aqu� se deben detallar los requerimientos de confiabilidad del sistema. Describa las caracter�sticas  de confiabilidad explicando la posibilidad del sistema de realizar las funciones para las que fue dise�ado sin presentar fallos. ', 'Entre estos requerimientos puede mencionar caracter�sticas como la disponibilidad, el porcentaje de fallas m�ximo, etc.'],
		seguridad: 'Aqu� se deben detallar los requerimientos de seguridad del sistema. Esto incluye si el acceso al sistema ser� controlado con nombres de usuario y contrase�as, que solo los usuarios con privilegios de administrador podr�n acceder a las funciones administrativas y los usuarios normales no podr�n.',
		eficiencia: 'En este apartado se debe ver reflejado las caracter�sticas de eficiencia del sistema. Se debe especificar: el tiempo de respuesta para una transacci�n (promedio), capacidad (n�mero de clientes y transacciones), rendimiento del procesamiento (Ej. transacciones por segundo) y cuando el sistema se ha degradado cu�l es el modo aceptable de operaci�n.',
		mantenimientoYActualizacion: 'En este apartado se debe ver reflejado los requerimientos de mantenimiento y actualizaci�n. La capacidad de mantenimiento es la habilidad que se tiene para realizar cambios al producto en el tiempo y la capacidad de actualizaci�n es la habilidad que se tiene para entregar las versiones del producto a bajo costo a los clientes con un m�nimo de tiempo de descarga. Una caracter�stica clave para apoyar este objetivo es la descarga autom�tica de parches o actualizaciones y actualizaciones del equipo del usuario final. Tambi�n debemos utilizar formatos para archivos de datos que incluyan suficientes metadatos para permitirnos trasformar con seguridad la informaci�n existente del usuario durante una actualizaci�n.',
		operabilidad: 'Especificar los requerimientos de soportabilidad y operabilidad del sistema. La soportabilidad la habilidad de proveer soporte t�cnico eficiente y a buen precio y la operabilidad es la habilidad que se tiene de hospedar y operar el software como un ASP (Proveedor de Servicios de Aplicaciones).',
		restriccionDeDiseno: ['En este apartado se debe indicar cualquier limitaci�n de dise�o en el sistema que es construido. ', 'Por ejemplo: lenguajes de software, requerimientos del proceso de software, uso de herramientas de desarrollo, componentes comprados, etc.'],
		documentacionYAyuda: ['En caso de que exista se debe describir los requerimientos, para la documentaci�n en l�nea del usuario, sistemas de ayuda, ayuda sobre avisos, etc.'],
		interUsuario: ['Describir  las interfaces de usuario que van a hacer ejecutadas por el software.', 'No aplica en caso de que corresponda'],
		interSoftware: ['Hay que describir las interfaces de software hacia otros componentes del sistema.', 'Pueden ser: componentes comprados, reutilizados o realizados para subsistemas fuera del alcance de este documento.'],
		interHardware: ['Aqu� se describen comentarios de cualquier interfaz de hardware que debe ser apoyada por el software, esto incluye: comportamiento, estructura l�gica, etc.'],
		interComunicaciones: ['Se debe definir las interfaces de comunicaciones a los dem�s sistemas o dispositivos como: redes LAN y dispositivos seriales remotos.'],
		politicas: 'Debe responder la siguiente pregunta: �El producto satisface las pol�ticas de la organizaci�n (por ejemplo, de privacidad y seguridad)? S�. Describa c�mo se satisfacen cada una de estas pol�ticas. No. Describa los pasos a tomar para hacer que el producto las cumpla. No. No hay pol�ticas que apliquen.',
		oontratosOtrasOrg: 'Debe responder la siguiente pregunta: �Fue alg�n componente o informaci�n producido por otra organizaci�n bajo contrato? S�. Revise los detalles del contrato para derechos de propiedad y licenciamiento. No. No se requiere hacer nada al respecto.',
		propInt: [
			{ Componente: 'Nombre del producto', Dueno: 'Nosotros', Licencia: 'Marca Registrada', Estado: 'Registro pendiente', Comentarios: 'debemos usar "(TM)", no "(R)"' },
			{ Componente: 'Base de datos', Dueno: 'Distribuidor', Licencia: 'GNU GPL', Estado: 'En conformidad, cobra cuota est�ndar', Comentarios: 'Se limita a 2 procesadores/servidore' },
			{ Componente: 'Im�genes de clip-art', Dueno: 'Ninguna', Licencia: 'Dominio p�blico', Estado: 'En conformidad', Comentarios: '' },
			{ Componente: 'Librer�a de controladores de sonido', Dueno: 'OS del Proyecto', Licencia: 'BSD', Estado: 'En conformidad', Comentarios: 'El indexador correo en un proceso aparte, no hace nuestro c�digo GPL.' },
			{ Componente: 'Indexador de la m�quina de b�squeda', Dueno: 'OS del Proyecto', Licencia: 'GPL', Estado: 'En conformidad', Comentarios: '' },
			{ Componente: 'Otras librer�as', Dueno: 'OS del Proyecto', Licencia: 'BSD', Estado: 'En conformidad', Comentarios: '' },
			{ Componente: 'Patente de algoritmo especial', Dueno: 'Nosotros', Licencia: 'Patente pendiente', Estado: 'En conformidad', Comentarios: 'B�squeda de patente terminada, aplicaci�n de patente en revisi�n.' }
		],
		estandares: 'En este apartado se debe describir por referencia cualquier est�ndar aplicable y las secciones espec�ficas de dichos  est�ndares que se apliquen al sistema, como son: est�ndares de calidad aspectos legales, interoperabilidad, internacionalizaci�n, est�ndares de seguridad de la informaci�n, compatibilidad del sistema operativo, etc.',
		Actores: [
			{ actor: 'Colocar un nombre representativo', descripcion: 'Breve descripci�n del rol que cumple actor' },
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
				codigo: 'C�digo',
				nombre: 'Colocar nombre del caso de uso.',
				descripcion: 'Describir la responsabilidad y el prop�sito del caso de uso.',
				requerimiento: 'Identificar los requerimientos que abarcan a este caso de uso.',
				precondicion: 'Tiene que ver con las condiciones en la que debe estar el sistema para que se ejecute el caso de uso. Ejemplo: registro y autenticaci�n del cliente.',
				flujoNormal: 'En el flujo de casos de uso se describe lo que hace el actor y lo que hace el sistema en respuesta. Se expresa en forma de un di�logo entre actor y  sistema. El flujo b�sico del caso de uso describe lo que sucede dentro del sistema. Este flujo puede ser representado en forma gr�fica. Hay que tomar en cuenta que el flujo de un caso de uso, deber�a tener entre cinco y siete pasos aproximadamente.',
				fnActorSistema: [{ actor: 'Describir cada paso alterno del flujo realizado por un actor.', sistema: 'Describir cada paso alterno del flujo realizado por alg�n recurso del sistema.' }],
				flujoAlterno: 'El flujo alterno se refleja el comportamiento alternativo debido a las irregularidades que ocurren en el flujo de eventos normal. Pueden ser tan  largos como sea  necesario para describir los eventos asociados al comportamiento alternativo.',
				faActorSistema: [{ actor: 'Describir cada paso alterno del flujo realizado por un actor.', sistema: 'Describir cada paso alterno del flujo realizado por alg�n recurso del sistema.' }],
				Poscondicion: 'Listar las condiciones en que se encuentra el sistema despu�s de haberse ejecutado el sistema.',
				rEspeciales: 'Nombrar y describir cualquier requerimiento que no haya sido abarcado por el flujo normal o los alternos.',
				pExtension: 'Se debe mencionar y describir los puntos en los cuales el flujo de eventos se extiende por otros casos de uso.',
			}
		],
		docsRelacionados: [{ titulo: '<t�tulo>', fecha: '<dd/mm/aa>', organizacion: '<nombre>', id: '<Id documento>' }],
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