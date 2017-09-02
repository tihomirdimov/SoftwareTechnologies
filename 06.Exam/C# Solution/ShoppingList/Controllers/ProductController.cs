using System.Collections.Generic;
using System.Linq;
using System.Web.Mvc;
using ShoppingList.Models;

namespace ShoppingList.Controllers
{
    [ValidateInput(false)]
    public class ProductController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            //TODO: Implement me ...

            using (var db = new ShoppingListDbContext())
            {
                List<Product> products = db.Products.ToList();
                return View(products);
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
        public ActionResult Create(Product product)
        {
            //TODO: Implement me ...

            if (ModelState.IsValid)
            {
                using (var db = new ShoppingListDbContext())
                {
                    db.Products.Add(product);
                    db.SaveChanges();
                    return RedirectToAction("Index", "Product");
                }
            }
            return View();
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            //TODO: Implement me ...

            using (var db = new ShoppingListDbContext())
            {
                var product = db.Products.FirstOrDefault(f => f.Id == id);
                if (product != null)
                {
                    return View(product);
                }
                return RedirectToAction("Index", "Product");
            }
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Product productModel)
        {
            //TODO: Implement me ...

            if (ModelState.IsValid)
            {
                using (var db = new ShoppingListDbContext())
                {
                    var product = db.Products.Find(id);
                    if (product != null)
                    {
                        product.Priority = productModel.Priority;
                        product.Name = productModel.Name;
                        product.Quantity = productModel.Quantity;
                        product.Status = productModel.Status;
                        db.SaveChanges();
                    }
                    return RedirectToAction("Index", "Product");
                }
            }
            return RedirectToAction("Create", "Product");
        }
    }
}