/** 
 * Boundaries js file. 
 * 
 * Handles javascript stuff related to boundaries function. 
 * 
 * PHP version 5 
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI: 
 * http://www.gnu.org/copyleft/lesser.html 
 * @author Ushahidi Team <team @ushahidi.com>
 * @package Ushahidi - http://source.ushahididev.com 
 * @module API Controller 
 * @copyright Ushahidi - http://www.ushahidi.com 
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */ 
 
 // Boundaries JS 
 function fillFields(id,boundary_name) { 
 	$("#boundary_id").attr("value", unescape(id));
	$("#boundary_name").attr("value", unescape(boundary_name)); 
} 

// Ajax Submission 
function catAction ( action, confirmAction, id ) { 
	var statusMessage; 
	var answer = confirm('Are You Sure You Want To ' +confirmAction) 
	if (answer){ 
		// Set Boundary ID
		$("#boundary_id_action").attr("value", id); // Set Submit Type
		$("#action").attr("value", action); // Submit Form
		$("#boundaryListing").submit(); 
	} 
}
