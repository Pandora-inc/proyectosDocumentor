<template>
	<div class="app">
		<div>
			<p class="c10 c14">
				<span class="c12"></span>
			</p>
		</div>
		<p class="c10 c14 c65">
			<span class="c12"></span>
		</p>
		<p class="c10 c14">
			<span class="c12"></span>
		</p>
		<p class="c14 c83">
			<span class="c86"></span>
		</p>
		<p class="c51 c14">
			<span class="c35"></span>
		</p>
		<p class="c14 c51">
			<span class="c35"></span>
		</p>
		<p class="c51">
			<span class="c94">Especificaci&oacute;n de Requerimientos del Software</span>
		</p>
		<p class="c51">
			<span class="c35">Proyecto: {{nombreProyecto}}</span>
		</p>
		<p class="c51 c14">
			<span class="c26"></span>
		</p>
		<p class="c51">
			<span class="c47">Versi&oacute;n: {{versionProyecto}}</span>
		</p>
		<p class="separador"></p>
		<p class="separador"></p>
		<div id="revisiones">
			<p class="c41">
				<span class="c35">Historial de Revisiones</span>
			</p>
			<p class="c10 c14">
				<span class="c12"></span>
			</p>
			<a id="t.c5be0c9c58c98bd106a9855089c5aba70972608e"></a> <a id="t.0"></a>
			<table class="c40">
				<tbody>
					<tr class="c6">
						<td class="c84 c43" colspan="1" rowspan="1">
							<p class="c41">
								<span class="c19">Versi&oacute;n</span>
							</p>
						</td>
						<td class="c79 c43" colspan="1" rowspan="1">
							<p class="c41">
								<span class="c19">Fecha</span>
							</p>
						</td>
						<td class="c43 c81" colspan="1" rowspan="1">
							<p class="c41">
								<span class="c19">Autor</span>
							</p>
						</td>
						<td class="c43 c61" colspan="1" rowspan="1">
							<p class="c41">
								<span class="c19">Descripci&oacute;n</span>
							</p>
						</td>
					</tr>
					<tr v-for="version of versionesProyecto" :key="version.id" class="c6">
						<td class="c84" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{version.version}}</span>
							</p>
						</td>
						<td class="c79" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{version.fecha}}</span>
							</p>
						</td>
						<td class="c81" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{version.nombre}}</span>
							</p>
						</td>
						<td class="c61" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{version.descripcion}}</span>
							</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p class="separador"></p>
		<div id="indice">
			<p class="c41">
				<span class="c35">&Iacute;ndice de Contenido</span>
			</p>
			<ol class="nested-counter-list">
				<li><a class="c49" href="#h.gjdgxs">Introducci&oacute;n</a>
					<ol>
						<li><a class="c49" href="#h.30j0zll">Alcance</a></li>
						<li><a class="c49" href="#h.definiciones">Definiciones, Acr&oacute;nimos y Abreviaturas</a></li>
					</ol></li>
				<li><a class="c49" href="#h.3znysh7">Requerimientos Funcionales</a></li>
				<li><a class="c49" href="#h.2et92p0">Requerimientos No Funcionales</a>
					<ol>
						<li><a class="c49" href="#h.tyjcwt">Usabilidad</a></li>
						<li><a class="c49" href="#h.3dy6vkm">Confiabilidad</a></li>
						<li><a class="c49" href="#h.1t3h5sf">Seguridad</a></li>
						<li><a class="c49" href="#h.4d34og8">Eficiencia</a></li>
						<li><a class="c49" href="#h.2s8eyo1">Mantenimiento y Actualizaci&oacute;n</a></li>
						<li><a class="c49" href="#h.17dp8vu">Soportabilidad y Operabilidad</a></li>
						<li><a class="c49" href="#h.3rdcrjn">Restricci&oacute;n de Dise&ntilde;o</a></li>
						<li><a class="c49" href="#h.26in1rg">Requerimientos de &nbsp;Documentaci&oacute;n en L&iacute;nea y &nbsp;de Sistemas de Ayuda</a></li>
						<li><a class="c49" href="#h.lnxbz9">Interfaces</a>
							<ol>
								<li><a class="c49" href="#h.35nkun2">Interfaces de Usuario</a></li>
								<li><a class="c49" href="#h.1ksv4uv">Interfaces de Software</a></li>
								<li><a class="c49" href="#h.44sinio">Interfaces de Hardware</a></li>
								<li><a class="c49" href="#h.2jxsxqh">Interfaces de Comunicaciones</a></li>
							</ol></li>
						<li><a class="c49" href="#h.z337ya">Aspectos Legales</a>
							<ol>
								<li><a class="c49" href="#h.3j2qqm3">Pol&iacute;ticas de la Organizaci&oacute;n</a></li>
								<li><a class="c49" href="#h.1y810tw">Contratos con Otras Organizaciones</a></li>
								<li><a class="c49" href="#h.49x2ik5">Propiedad Intelectual</a></li>
							</ol></li>
						<li><a class="c49" href="#h.2xcytpi">Est&aacute;ndares Aplicables</a></li>
					</ol></li>
				<li><a class="c49" href="#h.1ci93xb">Casos de Uso</a>
					<ol>
						<li><a class="c49" href="#h.3whwml4">Actores</a></li>
						<li><a class="c49" href="#h.2bn6wsx">Resumen</a></li>
						<li><a class="c49" href="#h.qsh70q">Diagrama</a></li>
						<li><a class="c49" href="#h.3as4poj">Especificaciones de Casos de Uso</a></li>
					</ol></li>
				<li><a class="c49" href="#h.1pxezwc">Documentos relacionados</a></li>
			</ol>
		</div>
		<p class="separador"></p>
		<p class="c41">
			<span class="c35">Especificaci&oacute;n de Requerimientos del Software</span>
		</p>
		<p class="c4" id="h.gjdgxs">
			<span class="c0"></span>
		</p>
		<ol class="c22 lst-kix_list_3-0 start" start="1">
			<li class="c71 li-bullet-0"><span class="c33">Introducci&oacute;n</span></li>
		</ol>
		<ol class="c22 lst-kix_list_3-1 start" start="1">
			<li class="c1 li-bullet-1" id="h.30j0zll"><span class="c19">Alcance</span></li>
		</ol>
		<p class="c9 c90">
			<span class="c7">{{alcance}}</span>
		</p>
		<p class="c4"></p>
		<ol class="c22 lst-kix_list_3-1" start="2">
			<li class="c1 li-bullet-1"><span class="c19" id="h.definiciones">Definiciones, Acr&oacute;nimos y Abreviaturas</span></li>
		</ol>
		<p class="c9 c17" id="h.3znysh7">
			<span v-for="definicion of definiciones" :key="definicion.id" class="c7"> {{definicion.palabra}} ({{definicion.abreviatura}}): {{definicion.definicion}}<Br />
			</span>
		</p>
		<ol class="c22 lst-kix_list_3-0" start="2">
			<li class="c71 li-bullet-0"><span class="c33">Requerimientos Funcionales</span></li>
		</ol>
		<div v-for="reque of requerimientos" :key="reque.id">
			<p class="c4"></p>
			<table class="c68">
				<tbody>
					<tr class="c6">
						<td class="c64" colspan="1" rowspan="1">
							<p class="c10">
								<span class="c0">Nombre del Requerimiento:</span>
							</p>
							<p class="c8">
								<span class="c7"></span>
							</p>
						</td>
						<td class="c96" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{reque.nombre}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c88" colspan="1" rowspan="1">
							<p class="c10">
								<span class="c0">Identificaci&oacute;n del requerimiento:</span>
							</p>
							<p class="c8">
								<span class="c7"></span>
							</p>
						</td>
						<td class="c85" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{reque.identificador}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c70" colspan="2" rowspan="1">
							<p class="c9">
								<span class="c7">{{reque.descripcion}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c70" colspan="2" rowspan="1">
							<p class="c9"></p>
							<p class="c9">
								<span class="c7">Prioridad: {{reque.prioridad}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c64" colspan="1" rowspan="1">
							<p class="c10">
								<span class="c0">Requerimiento relacionado:</span>
							</p>
							<p class="c8">
								<span class="c7"></span>
							</p>
						</td>
						<td class="c96" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{reque.rela}}</span>
							</p>
						</td>
						
					</tr>
				</tbody>
			</table>
		</div>
		<p class="separador"></p>
		<ol class="c22 lst-kix_list_3-0" start="3">
			<li class="c71 li-bullet-0"><span class="c33" id="h.2et92p0">Requerimientos No Funcionales</span></li>
		</ol>
		<p class="c9 c38">
			<span class="c7">Describa los requerimientos no funcionales para este documento. Los requerimientos no funcionales tienen que ver con las caracter&iacute;sticas que de una u otra forma puedan limitar el sistema como son: el rendimiento (en tiempo y espacio), confiabilidad, interfaces, fiabilidad (robustez del sistema, disponibilidad de equipo), mantenimiento, seguridad, portabilidad, est&aacute;ndares, etc. </span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="3">
			<li class="c1 li-bullet-1"><span class="c19">Usabilidad</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7" v-for="usab of usabilidad" :key="usab.id">{{usab}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="4">
			<li class="c1 li-bullet-1"><span class="c19" id="h.3dy6vkm">Confiabilidad</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7" v-for="conf of confiabilidad" :key="conf.id">{{conf}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="5">
			<li class="c1 li-bullet-1"><span class="c19" id="h.1t3h5sf">Seguridad</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7">{{seguridad}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="6">
			<li class="c1 li-bullet-1"><span class="c19" id="h.4d34og8">Eficiencia</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7 c53">{{eficiencia}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="7">
			<li class="c1 li-bullet-1"><span class="c19" id="h.2s8eyo1">Mantenimiento y Actualizaci&oacute;n</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7 c53">{{mantenimientoYActualizacion}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="8">
			<li class="c1 li-bullet-1"><span class="c19" id="h.17dp8vu">Soportabilidad y Operabilidad</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7 c53">{{operabilidad}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="9">
			<li class="c1 li-bullet-1"><span class="c19" id="h.3rdcrjn">Restricci&oacute;n de Dise&ntilde;o</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7 c53" v-for="diseno of restriccionDeDiseno" :key="diseno.id">{{diseno}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="10">
			<li class="c66 c80 li-bullet-1"><span class="c19" id="h.26in1rg">Requerimientos de Documentaci&oacute;n en L&iacute;nea y &nbsp;de Sistemas de Ayuda</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7 c53" v-for="ayuda of documentacionYAyuda" :key="ayuda.id">{{ayuda}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="11">
			<li class="c1 li-bullet-2"><span class="c19" id="h.lnxbz9">Interfaces</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7 c53">En este apartado se definen las interfaces que debe apoyar la aplicaci&oacute;n, como son: las interfaces de usuario, interfaces de software, etc. </span>
		</p>
		<p class="c9 c17">
			<span class="c7">En caso de que aplique es conveniente hacer referencia a est&aacute;ndares de la aplicaci&oacute;n o corporativos.</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-2 start" start="1">
			<li class="c29 li-bullet-1"><span class="c19" id="h.35nkun2">Interfaces de Usuario</span></li>
		</ol>
		<p class="c9 c21">
			<span class="c7 c53" v-for="intUsr of interUsuario" :key="intUsr.id">{{intUsr}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-2" start="2">
			<li class="c29 li-bullet-1"><span class="c19" id="h.1ksv4uv">Interfaces de Software</span></li>
		</ol>
		<p class="c9 c21">
			<span class="c7 c53" v-for="intSoft of interSoftware" :key="intSoft.id">{{intSoft}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-2" start="3">
			<li class="c29 li-bullet-1"><span class="c19" id="h.44sinio">Interfaces de Hardware</span></li>
		</ol>
		<p class="c9 c21" id="h.2jxsxqh">
			<span class="c7 c53" v-for="intHard of interHardware" :key="intHard.id">{{intHard}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-2" start="4">
			<li class="c69 li-bullet-1"><span class="c19">Interfaces de Comunicaciones</span></li>
		</ol>
		<p class="c9 c21">
			<span class="c7 c53" v-for="intCom of interComunicaciones" :key="intCom.id">{{intCom}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="12">
			<li class="c1 li-bullet-2"><span class="c19" id="h.z337ya">Aspectos Legales</span></li>
		</ol>
		<p class="c9 c63">
			<span class="c7">Este punto define las cuestiones legales que pudieran afectar esta entrega. No considerar cuidadosamente estas cuestiones puede poner a la organizaci&oacute;n de desarrollo en riesgo de una acci&oacute;n legal. Busque consejo profesional si es necesario. </span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-2" start="5">
			<li class="c29 li-bullet-1"><span class="c19" id="h.3j2qqm3">Pol&iacute;ticas de la Organizaci&oacute;n</span></li>
		</ol>
		<p class="c9 c31">
			<span class="c7">{{politicas}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-2" start="6">
			<li class="c29 li-bullet-1"><span class="c19" id="h.1y810tw">Contratos con Otras Organizaciones</span></li>
		</ol>
		<p class="c9 c31">
			<span class="c7">{{oontratosOtrasOrg}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-2" start="7">
			<li class="c29 li-bullet-1"><span class="c19" id="id.4i7ojhp">Propiedad Intelectual</span></li>
		</ol>
		<p class="separadorSimple"></p>
		<a id="t.bd81cc39e16baa55623788e3d30486c0acb0bf3d"></a> <a id="t.2"></a>
		<table class="c40">
			<tbody>
				<tr class="c91">
					<td class="c11 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Componente</span>
						</p>
					</td>
					<td class="c42 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Due&ntilde;o</span>
						</p>
					</td>
					<td class="c20 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Licencia</span>
						</p>
					</td>
					<td class="c44 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Estado</span>
						</p>
					</td>
					<td class="c3 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Comentarios</span>
						</p>
					</td>
				</tr>
				<tr class="c6" v-for="pInt of propInt" :key="pInt.id">
					<td class="c11" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{pInt.Componente}}</span>
						</p>
					</td>
					<td class="c42" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{pInt.Dueno}}</span>
						</p>
					</td>
					<td class="c20" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{pInt.Licencia}}</span>
						</p>
					</td>
					<td class="c44" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{pInt.Estado}}</span>
						</p>
					</td>
					<td class="c3" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{pInt.Comentarios}}</span>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-1" start="13">
			<li class="c1 li-bullet-1"><span class="c19" id="h.2xcytpi">Est&aacute;ndares Aplicables</span></li>
		</ol>
		<p class="c9 c63">
			<span class="c7 c53">{{estandares}}</span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_3-0" start="4">
			<li class="c71 li-bullet-0"><span class="c33" id="h.1ci93xb">Casos de Uso</span></li>
		</ol>
		<ol class="c22 lst-kix_list_3-1 start" start="1">
			<li class="c1 li-bullet-1" id="h.3whwml4"><span class="c19">Actores</span></li>
		</ol>
		<p class="c48">
			<span class="c7">Listar los actores identificados junto con una breve descripci&oacute;n de su rol.</span>
		</p>
		<p class="c48">
			<span class="c7">&nbsp;</span>
		</p>
		<a id="t.7e9b035117781323bea774323ea7faaf34253f95"></a> <a id="t.3"></a>
		<table class="c30">
			<tbody>
				<tr class="c74">
					<td class="c15" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Actor</span>
						</p>
					</td>
					<td class="c58 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Descripci&oacute;n</span>
						</p>
					</td>
				</tr>
				<tr class="c18" v-for="act of Actores" :key="act.id">
					<td class="c34" colspan="1" rowspan="1">
						<p class="c10">
							<span class="c7">{{act.actor}}</span>
						</p>
					</td>
					<td class="c58" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{act.descripcion}}</span>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_1-1 start" start="1">
			<li class="c39 c72 li-bullet-3"><span class="c19" id="h.2bn6wsx">Resumen</span></li>
		</ol>
		<p class="c9 c92">
			<span class="c7">Los casos de uso definen de forma verbal y gr&aacute;fica los requerimientos funcionales del sistema, incluyendo algunos requerimientos no funcionales. Los actores se pueden conseguir en el documento de Visi&oacute;n del Sistema. Se debe llenar la tabla que se muestra a continuaci&oacute;n:</span>
		</p>
		<p class="separador"></p>
		<a id="t.8f5e2c25c1b2770a446df23cb97d0707f3e4df9c"></a> <a id="t.4"></a>
		<table class="c30">
			<tbody>
				<tr class="c74">
					<td class="c15" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Nombre</span>
						</p>
					</td>
					<td class="c43 c58" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Caso de Uso</span>
						</p>
					</td>
				</tr>
				<tr class="c18" v-for="cuRes of cuResumen" :key="cuRes.id">
					<td class="c34" colspan="1" rowspan="1">
						<p class="c10">
							<span class="c7">{{cuRes.nombre}}</span>
						</p>
					</td>
					<td class="c58" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{cuRes.cu}}</span>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_10-1 start" start="3">
			<li class="c1 li-bullet-1"><span class="c19" id="h.qsh70q">Diagrama</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7">En este apartado se deben reflejar los diagramas de casos de uso inicial del sistema. Los diagramas de casos de uso son una representaci&oacute;n gr&aacute;fica de una parte o todos los actores y casos de uso del sistema, incluyendo sus interacciones y estos pueden ser desarrollados en una herramienta de modelado visual. La construcci&oacute;n del Diagrama de Casos de Uso se inicia con la elaboraci&oacute;n del Diagrama de Casos de Uso Inicial, el refinamiento del mismo puede contemplarse en iteraciones posteriores. </span>
		</p>
		<p class="separadorSimple"></p>
		<ol class="c22 lst-kix_list_10-1" start="4">
			<li class="c1 li-bullet-1"><span class="c19" id="h.3as4poj">Especificaciones de Casos de Uso</span></li>
		</ol>
		<p class="c9 c92">
			<span class="c7">En este apartado se debe recoger la especificaci&oacute;n completa de cada caso de uso. Esto incluye los campos: nombre, descripci&oacute;n, actores, precondiciones, flujo normal, flujo alternativo, puntos de extensi&oacute;n, entre otros. Se &nbsp;debe elaborar una tabla de especificaci&oacute;n por cada caso de uso.</span>
		</p>
		<p class="separadorSimple"></p>
		<a id="t.74872c2413a31824a15ac3488299485630270a1d"></a> <a id="t.5"></a>
		<div v-for="cu of cuEspecificaciones" :key="cu.id">
			<table class="c93">
				<tbody>
					<tr class="c6">
						<td class="c57 c43" colspan="2" rowspan="1">
							<p class="c41">
								<span class="c19">Caso de Uso</span> <span class="c52"> - </span> <span class="c7">{{cu.codigo}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c5" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">Nombre:</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.nombre}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c5" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">Descripci&oacute;n:</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.descripcion}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c5" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">Requerimiento:</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.requerimiento}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c5" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">Precondici&oacute;n:</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.precondicion}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c57 c43" colspan="2" rowspan="1">
							<p class="c9">
								<span class="c0">Flujo Normal:</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c57" colspan="2" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.flujoNormal}}</span>
							</p>
							<p class="c10 c14">
								<span class="c12"></span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c43 c73" colspan="1" rowspan="1">
							<p class="c41">
								<span class="c0">Actor</span>
							</p>
						</td>
						<td class="c13 c43" colspan="1" rowspan="1">
							<p class="c41">
								<span class="c0">Sistema</span>
							</p>
						</td>
					</tr>
					<tr class="c6" v-for="fn of cu.fnActorSistema" :key="fn.id">
						<td class="c73" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">{{fn.actor}}</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">{{fn.sistema}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c57 c43" colspan="2" rowspan="1">
							<p class="c9">
								<span class="c0">Flujo Alterno:</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c57" colspan="2" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.flujoAlterno}}</span>
							</p>
							<p class="c10 c14">
								<span class="c56"></span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c73 c43" colspan="1" rowspan="1">
							<p class="c41">
								<span class="c0">Actor</span>
							</p>
						</td>
						<td class="c13 c43" colspan="1" rowspan="1">
							<p class="c41">
								<span class="c0">Sistema</span>
							</p>
						</td>
					</tr>
					<tr class="c6" v-for="fa of cu.fnActorSistema" :key="fa.id">
						<td class="c73" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">{{fa.actor}}</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">{{fa.sistema}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c5" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">Poscondici&oacute;n:</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.Poscondicion}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c5" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">Requerimientos Especiales:</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.rEspeciales}}</span>
							</p>
						</td>
					</tr>
					<tr class="c6">
						<td class="c5" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c0">Puntos de Extensi&oacute;n:</span>
							</p>
						</td>
						<td class="c13" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">{{cu.pExtension}}</span>
							</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p class="separadorSimple"></p>
		<p class="c10">
			<span class="c7">Nota: Cada paso del flujo de los eventos debe ser enumerado, manteniendo una secuencia entre los pasos del flujo realizado por un actor y los pasos del flujo realizado por alg&uacute;n recurso del sistema. &nbsp;</span>
		</p>
		<ol class="c22 lst-kix_list_12-0 start" start="5">
			<li class="c71 li-bullet-0"><span class="c33" id="h.1pxezwc">Documentos relacionados</span></li>
		</ol>
		<p class="c9 c17">
			<span class="c7">Para poder visualizar las referencias a otros documentos, se debe de llenar la tabla que se muestra a continuaci&oacute;n:</span>
		</p>
		<p class="separadorSimple"></p>
		<a id="t.52743e5e11906026a7a0a15b78c7a14f17e97104"></a> <a id="t.6"></a>
		<table class="c68">
			<tbody>
				<tr class="c6">
					<td class="c25 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">T&iacute;tulo</span>
						</p>
					</td>
					<td class="c78 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Fecha</span>
						</p>
					</td>
					<td class="c78 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Organizaci&oacute;n</span>
						</p>
					</td>
					<td class="c78 c43" colspan="1" rowspan="1">
						<p class="c41">
							<span class="c19">Identificador del documento</span>
						</p>
					</td>
				</tr>
				<tr class="c6" v-for="relas of docsRelacionados" :key="relas.id">
					<td class="c25" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{relas.titulo}}</span>
						</p>
					</td>
					<td class="c78" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{relas.fecha}}</span>
						</p>
					</td>
					<td class="c78" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{relas.organizacion}}</span>
						</p>
					</td>
					<td class="c78" colspan="1" rowspan="1">
						<p class="c9">
							<span class="c7">{{relas.id}}</span>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="separador"></p>
		<div>
			<p class="c14 c46">
				<span class="c12"></span>
			</p>
			<a id="t.9d3886756bc0c9440139abbedb27f9c657d74274"></a><a id="t.7"></a>
			<table class="c40">
				<tbody>
					<tr class="c14">
						<td class="c87" colspan="1" rowspan="1">
							<p class="c10">
								<span class="c19">Identificador del documento:</span>
							</p>
						</td>
						<td class="c60" colspan="1" rowspan="1">
							<p class="c9">
								<span class="c7">&nbsp;&lt;insertar identificador del documento&gt; </span>
							</p>
						</td>
					</tr>
				</tbody>
			</table>
			<p class="c51 c14">
				<span class="c0"></span>
			</p>
		</div>
	</div>
</template>
<script>
// @ is an alias to /src
import requerimientos from "../functions/requerimientos.js";

export default {
	name: 'EspecificacionRequerimientos',
	data(){
		return {
			nombreProyecto: '<Nombre del Proyecto>'
		}
	},
	methods: {
		loadReque() {
			requerimientos.loadReque(this.auth.user.id)
			.then(data => {
				this.loading = false;
				this.proyectoReques = data.data;
			});
		}
	},
	mounted() {
		this.loadReque(1);
  }
}
</script>
