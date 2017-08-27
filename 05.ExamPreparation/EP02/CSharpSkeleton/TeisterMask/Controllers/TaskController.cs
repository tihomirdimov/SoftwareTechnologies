using System;
using System.Linq;
using System.Web.Mvc;
using TeisterMask.Models;

namespace TeisterMask.Controllers
{
    [ValidateInput(false)]
    public class TaskController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            // TODO: Implement me...

            using (var db = new TeisterMaskDbContext())
            {
                var tasks = db.Tasks.ToList();
                return View(tasks);
            }
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            // TODO: Implement me...

            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Task task)
        {
            // TODO: Implement me...

            if (ModelState.IsValid)
            {
                using (var db = new TeisterMaskDbContext())
                {
                    db.Tasks.Add(task);
                    db.SaveChanges();
                    return RedirectToAction("Index", "Task");
                }
            }
            return View();
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            // TODO: Implement me...

            using (var db = new TeisterMaskDbContext())
            {
                var task = db.Tasks.FirstOrDefault(t => t.Id == id);
                if (task != null)
                {
                    return View(task);
                }
                return RedirectToAction("Index", "Task");
            }
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Task taskModel)
        {
            // TODO: Implement me...

            if (ModelState.IsValid)
            {
                using (var db = new TeisterMaskDbContext())
                {
                    var task = db.Tasks.Find(taskModel.Id);
                    if (task != null)
                    {
                        task.Title = taskModel.Title;
                        task.Status = taskModel.Status;
                        db.SaveChanges();
                    }
                    return RedirectToAction("Index", "Task");
                }
            }
            return RedirectToAction("Index", "Task");
        }
    }
}