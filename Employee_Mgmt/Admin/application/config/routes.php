<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Admin/login';
$route['Dashboard'] = 'Admin/dashboard';
$route['FetchAdmin'] = 'Admin/fetch_admin';
$route['AdminLogout'] = 'Admin/logout';
$route['AddCompany'] = 'Admin/add_company';
$route['CompanyData'] = 'Admin/company_add';
$route['AddEmployee'] = 'Admin/add_employee';
$route['EmployeeData'] = 'Admin/employee_add';
$route['EmployeeList'] = 'Admin/employee_list';
$route['UpdateEmployee/(:num)'] = 'Admin/update_employee/$1'; 
$route['UpdateEmployee'] = 'Admin/employee_update';
$route['DeleteEmployee/(:num)'] = 'Admin/delete_data/$1';
$route['Payroll'] = 'Admin/payroll';
$route['AddPayroll/(:num)'] = 'Admin/add_payroll/$1';
$route['Salary'] = 'Admin/save_salary';
$route['EmployeePayrollList'] = 'Admin/employee_payroll_list';
$route['UpdatePayroll/(:num)'] = 'Admin/update_payroll/$1';
$route['UpdatePayroll'] = 'Admin/payroll_update';
$route['DeletePayroll/(:num)'] = 'Admin/delete_payroll/$1';
$route['Holiday'] = 'Admin/add_holiday';
$route['AddHoliday'] = 'Admin/save_holiday';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
