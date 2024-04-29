use App\Models\Employee;

public function index()
{
$pageTitle = 'Employee List';
// ELOQUENT
$employees = Employee::all();
return view('employee.index', [
'pageTitle' => $pageTitle,
'employees' => $employees
]);
}
