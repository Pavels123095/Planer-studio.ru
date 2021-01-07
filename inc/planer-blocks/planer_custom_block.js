var el = wp.element.createElement;
var registerBlockType = wp.blocks.registerBlockType;
registerBlockType('planer-custom-block/project-block',{
	title:'О проекте',
	icon:{background:'#000',foreground:'#ffff00'},
	edit:function(){return el('input',{className:'planer-input',type:'text',name:'description_project'});},
	save:function(){return el('input',{className:'planer-input',type:'text',name:'description_project'});},
});