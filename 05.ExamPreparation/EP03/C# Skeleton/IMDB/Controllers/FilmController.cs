using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Web.Mvc;
using IMDB.Models;

namespace IMDB.Controllers
{
    [ValidateInput(false)]
    public class FilmController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            //TODO: Implement me ...

            using (var db = new IMDBDbContext())
            {
                List<Film> films = db.Films.ToList();
                return View(films);
            }
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            //TODO: Implement me ...

            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Film film)
        {
            //TODO: Implement me ...

            if (ModelState.IsValid)
            {
                using (var db = new IMDBDbContext())
                {
                    db.Films.Add(film);
                    db.SaveChanges();
                    return RedirectToAction("Index", "Film");
                }
            }
            return View();
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            //TODO: Implement me ...

            using (var db = new IMDBDbContext())
            {
                var film = db.Films.FirstOrDefault(f => f.Id == id);
                if (film != null)
                {
                    return View(film);
                }
                return RedirectToAction("Index", "Film");
            }

        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Film filmModel)
        {
            //TODO: Implement me ...

            if (ModelState.IsValid)
            {
                using (var db = new IMDBDbContext())
                {
                    var film = db.Films.Find(filmModel.Id);
                    if (film != null)
                    {
                        film.Name = filmModel.Name;
                        film.Genre = filmModel.Genre;
                        film.Director = filmModel.Director;
                        film.Year = filmModel.Year;
                        db.SaveChanges();
                    }
                    return RedirectToAction("Index", "Film");
                }
            }
            return RedirectToAction("Create", "Film");

        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            //TODO: Implement me ...

            using (var db = new IMDBDbContext())
            {
                var film = db.Films.FirstOrDefault(f => f.Id == id);
                if (film != null)
                {
                    return View(film);
                }
                return RedirectToAction("Index", "Film");
            }

        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Film filmModel)
        {
            //TODO: Implement me ...

            using (var db = new IMDBDbContext())
            {
                var film = db.Films.FirstOrDefault(f => f.Id == id);
                if (film != null)
                {
                    db.Films.Remove(film);
                    db.SaveChanges();
                    return RedirectToAction("Index", "Film");
                }
                return RedirectToAction("Index", "Film");
            }
        }
    }
}