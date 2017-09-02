package shoppinglist.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import shoppinglist.bindingModel.ProductBindingModel;
import shoppinglist.entity.Product;
import shoppinglist.repository.ProductRepository;

import java.util.List;

@Controller
public class ProductController {

	private final ProductRepository productRepository;

	@Autowired
	public ProductController(ProductRepository productRepository) {
		this.productRepository = productRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		//TODO: Implement me ...

		List<Product> products = this.productRepository.findAll();
		model.addAttribute("products", products);
		model.addAttribute("view", "product/index");

		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		//TODO: Implement me ...

		model.addAttribute("view", "product/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, ProductBindingModel productBindingModel) {
		//TODO: Implement me ...

		if (productBindingModel == null) {
			return "redirect:/";
		}

		if (productBindingModel.getPriority().equals(null) ||
				productBindingModel.getName().equals("") ||
				productBindingModel.getQuantity().equals(null) ||
				productBindingModel.getStatus().equals("")) {
			return "redirect:/";
		}

		Product film = new Product(
				productBindingModel.getPriority(),
				productBindingModel.getName(),
				productBindingModel.getQuantity(),
				productBindingModel.getStatus());
		productRepository.saveAndFlush(film);

		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		//TODO: Implement me ...

		Product product = productRepository.findOne(id);
		if (product == null) {
			return "redirect:/";
		}

		model.addAttribute("view", "product/edit");
		model.addAttribute("product", product);
		return "base-layout";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model, @PathVariable int id, ProductBindingModel productBindingModel) {
		//TODO: Implement me ...

		Product product = productRepository.findOne(id);

		if (productBindingModel == null) {
			return "redirect:/";
		}

		if (productBindingModel.getPriority().equals(null) ||
				productBindingModel.getName().equals("") ||
				productBindingModel.getQuantity().equals(null) ||
				productBindingModel.getStatus().equals("")) {
			return "redirect:/";
		}

		product.setPriority(productBindingModel.getPriority());
		product.setName(productBindingModel.getName());
		product.setQuantity(productBindingModel.getQuantity());
		product.setStatus(productBindingModel.getStatus());
		productRepository.saveAndFlush(product);

		return "redirect:/";
	}
}
