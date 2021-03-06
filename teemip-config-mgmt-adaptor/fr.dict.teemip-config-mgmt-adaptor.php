<?php
// Copyright (C) 2020 TeemIp
//
//   This file is part of TeemIp.
//
//   TeemIp is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   TeemIp is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with TeemIp. If not, see <http://www.gnu.org/licenses/>

/**
 * @copyright   Copyright (C) 2020 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: ConnectableCI
//
 
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ConnectableCI/Tab:ipaddresses_list' => 'IPs des interfaces',
	'Class:ConnectableCI/Tab:ipaddresses_list+' => 'Liste de toutes les adresses IP de toutes les interfaces physiques attachées au CI',
));

//
// Class: DatacenterDevice
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DatacenterDevice/Attribute:managementip_id' => 'IP de gestion',
	'Class:DatacenterDevice/Attribute:managementip_id+' => '',
	'Class:DatacenterDevice/Attribute:managementip_name' => 'Nom de l\'IP de gestion',
	'Class:DatacenterDevice/Attribute:managementip_name+' => '',
));

//
// Class: NetworkInterface
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:NetworkInterface:baseinfo' => 'Informations générales',
	'Class:NetworkInterface:moreinfo' => 'Informations complémentaires',
	'Class:NetworkInterface/Attribute:operational_status' => 'Statut opérationnel',
	'Class:NetworkInterface/Attribute:operational_status+' => 'Calculé à partir du statut des classes filles',
	'Class:NetworkInterface/Attribute:operational_status/Value:active' => 'Active',
	'Class:NetworkInterface/Attribute:operational_status/Value:active+' => '',
	'Class:NetworkInterface/Attribute:operational_status/Value:inactive' => 'Inactive',
	'Class:NetworkInterface/Attribute:operational_status/Value:inactive+' => '',
));

//
// Class: IPInterface
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:IPInterface/Attribute:ipaddress_id' => 'Adresse IP',
	'Class:IPInterface/Attribute:ipaddress_id+' => '',
));

//
// Class: PhysicalInterface
//

Dict::Add('FR FR', 'English', 'English', array(
	'Class:PhysicalInterface/Attribute:vrfs_list' => 'VRFs',
	'Class:PhysicalInterface/Attribute:vrfs_list+' => '',
	'Class:PhysicalInterface/Attribute:status' => 'Statut',
	'Class:PhysicalInterface/Attribute:status+' => '',
	'Class:PhysicalInterface/Attribute:status/Value:stock' => 'Stock',
	'Class:PhysicalInterface/Attribute:status/Value:stock+' => '',
	'Class:PhysicalInterface/Attribute:status/Value:active' => 'Active',
	'Class:PhysicalInterface/Attribute:status/Value:active+' => '',
	'Class:PhysicalInterface/Attribute:status/Value:inactive' => 'Inactive',
	'Class:PhysicalInterface/Attribute:status/Value:inactive+' => '',
	'Class:PhysicalInterface/Attribute:status/Value:obsolete' => 'Obsolete',
	'Class:PhysicalInterface/Attribute:status/Value:obsolete+' => '',
));

//
// Class: VLAN
//

Dict::Add('FR FR', 'English', 'English', array(
	'Class:VLAN/Tab:ipaddresses_list' => 'IPs des Interfaces',
	'Class:VLAN/Tab:ipaddresses_list+' => 'Liste de toutes les adresses IP de toutes les interfaces attachées au CI',
));
