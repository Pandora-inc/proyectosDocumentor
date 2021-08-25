import { apiFetch } from "../functions/fetch.js";

/*Perfil*/
const requerimientos = {
	loadReque(id) {
		return apiFetch('/traerProyectoReques', {
			method: 'POST',
			body: JSON.stringify({
				id: id
			})
		})
			.then(data => {
				return data;
			});
	}
//	,
//	ediarPerfil(id_usuario, nombre_usuario, apellido_usuario, pais_usuario, edad_usuario) {
//		return apiFetch('/editarperfil', {
//			method: 'POST',
//			body: JSON.stringify({
//				id_usuario: id_usuario,
//				nombre_usuario: nombre_usuario,
//				apellido_usuario: apellido_usuario,
//				pais_usuario: pais_usuario,
//				edad_usuario: edad_usuario
//			})
//		}).then(rta => {
//			return rta;
//		})
//	}
}


export default requerimientos;